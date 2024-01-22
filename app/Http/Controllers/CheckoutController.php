<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Carts;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Iyzipay\Request\CreatePaymentRequest;

class CheckoutController extends Controller
{
    public function index(){
        return view('front.pages.payment');
    }

    public function checkout(Request $request){
        $name = $request->name;
        $card_no = $request->card_no;
        $card_month = $request->card_month;
        $card_year = $request->card_year;
        $cvc = $request->cvc;

        $user = Auth::user();

        $totalPrice = 0;
        $cartNo = '';
        $cartItem = session('cart', []);
        foreach ($cartItem as $item){
            $totalPrice += $item['price'];
            $cartNo .= $item['id'];
        }
        $total = $totalPrice;
        $code = $cartNo;

        $options = new \Iyzipay\Options();
        $options->setApiKey("sandbox-L9BwTnGhApORQaaumNJXsYQA1EeoxuNL");
        $options->setSecretKey("sandbox-6TN8kV1WbD9z4GdgOXZPuKWPtPgMGWGX");
        $options->setBaseUrl("https://sandbox-api.iyzipay.com");

        $request = new \Iyzipay\Request\CreatePaymentRequest();
        $request->setLocale(\Iyzipay\Model\Locale::TR);
        $request->setConversationId($code);
        $request->setPrice($total);
        $request->setPaidPrice($total);
        $request->setCurrency(\Iyzipay\Model\Currency::TL);
        $request->setInstallment(1);
        $request->setBasketId($code);
        $request->setPaymentChannel(\Iyzipay\Model\PaymentChannel::WEB);
        $request->setPaymentGroup(\Iyzipay\Model\PaymentGroup::PRODUCT);

        $paymentCard = new \Iyzipay\Model\PaymentCard();
        $paymentCard->setCardHolderName($name);
        $paymentCard->setCardNumber($card_no);
        $paymentCard->setExpireMonth($card_month);
        $paymentCard->setExpireYear($card_year);
        $paymentCard->setCvc($cvc);
        $paymentCard->setRegisterCard(0);
        $request->setPaymentCard($paymentCard);

        $buyer = new \Iyzipay\Model\Buyer();
        $buyer->setId($user->id);
        $buyer->setName($user->name);
        $buyer->setSurname("-");
        $buyer->setGsmNumber("+905350000000");
        $buyer->setEmail($user->email);
        $buyer->setIdentityNumber("74300864791");
        $buyer->setLastLoginDate("2015-10-05 12:43:35");
        $buyer->setRegistrationDate("2013-04-21 15:12:09");
        $buyer->setRegistrationAddress("Nidakule Göztepe, Merdivenköy Mah. Bora Sok. No:1");
        $buyer->setIp("85.34.78.112");
        $buyer->setCity("Istanbul");
        $buyer->setCountry("Turkey");
        $buyer->setZipCode("34732");
        $request->setBuyer($buyer);

        $shippingAddress = new \Iyzipay\Model\Address();
        $shippingAddress->setContactName($user->name);
        $shippingAddress->setCity("Istanbul");
        $shippingAddress->setCountry("Turkey");
        $shippingAddress->setAddress("Nidakule Göztepe, Merdivenköy Mah. Bora Sok. No:1");
        $shippingAddress->setZipCode("34742");
        $request->setShippingAddress($shippingAddress);

        $billingAddress = new \Iyzipay\Model\Address();
        $billingAddress->setContactName($user->name);
        $billingAddress->setCity("Istanbul");
        $billingAddress->setCountry("Turkey");
        $billingAddress->setAddress("Nidakule Göztepe, Merdivenköy Mah. Bora Sok. No:1");
        $billingAddress->setZipCode("34742");
        $request->setBillingAddress($billingAddress);

        $basketItems = $this->getBasketItems();
        $request->setBasketItems($basketItems);

        $payment = \Iyzipay\Model\Payment::create($request, $options);

        if ($payment->getStatus() == "success"){
            $cartItems = session('cart', []);

            foreach ($cartItems as $item) {
                $carts = new Carts();
                $carts->userId = $user->id;
                $carts->courseId = $item['id']; // Ürünün id'sini ekleyin
                $carts->save();
            }

            // Sepetten başarılı ödeme sonrasında ilgili ürünü kaldırma
            foreach ($cartItems as $item) {
                $productID = $item['id'];
                if (array_key_exists($productID, $cartItems)) {
                    unset($cartItems[$productID]);
                    session()->put('cart', $cartItems);
                }
            }

            return redirect()->route('cart')->with('success', 'Ödeme Başarılı');
        } else {
            return redirect()->route('cart')->with('error', 'Ödeme Başarısız, Bir Hata Oluştu!');
        }
    }

    public function getBasketItems(){
        $basketItems = array();
        $cartItem = session('cart', []);
        foreach ($cartItem as $item){
            $basketItem = new \Iyzipay\Model\BasketItem();
            $basketItem->setId($item['id']);
            $basketItem->setName($item['title']);
            $basketItem->setCategory1($item['category']);
            $basketItem->setItemType(\Iyzipay\Model\BasketItemType::PHYSICAL);
            $basketItem->setPrice($item['price']);

            $basketItems[] = $basketItem; // Diziyi ekleyin
        }
        return $basketItems;
    }



}
