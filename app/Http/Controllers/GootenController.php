<?php

namespace App\Http\Controllers;

use HttpRequest;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Input;
use Zend\Diactoros\Request;

class GootenController extends Controller
{
    public function index()
    {
      return view('gooten.search');
    }

    public function cartItems ()
    {
      if(null == Input::get('SKU')){
        return view('gooten.cartItems');
      } else {
        $SKU = Input::get('SKU');
        $quantity = Input::get('quantity');
        $state = Input::get('state');
        $postal_code = Input::get('postal_code');
        $items = [];

        foreach ($SKU as $key=>$value) {
          if($value !== null) {
            $items[$key] = [
              'SKU' => $SKU[$key],
              'Quantity' => intval($quantity[$key]),
              'ShipCarrierMethodId' => 1,
              'Images' => [
                "Url" => "https:\/\/printio-widget-live.s3.amazonaws.com\/200E4604-4CD5-4E0C-A131-9F5AF25006E6.jpg",
                "Index" => 0,
                "ThumbnailUrl" => "https:\/\/printio-widget-live.s3.amazonaws.com\/200E4604-4CD5-4E0C-A131-9F5AF25006E6.jpg",
                "ManipCommand" => "",
                "SpaceId" => "0"
              ]
            ];
          }
        }

        $body = json_encode([
          'Items' => $items,
          "ShipToAddress" => [
            "FirstName" => "Gooten",
            "LastName" => "Test",
            "Line1" => "222 Broadway",
            "City" => "New York",
            "State" => $state,
            "CountryCode" => "US",
            "PostalCode" => $postal_code,
            "IsBusinessAddress" => false,
            "Phone" => "1234567890",
            "Email" => "test@gooten.com"
          ],
          "LanguageCode" => "en",
          "CurrencyCode" => "USD",
          "ShipToCountry" => "US",
          "Payment" => [
            "CurrencyCode" => "USD"
          ]
        ]);


        $client = new Client();

        $res = $client->post('https://api.print.io/api/v/5/source/api/priceestimate/',
          [
            'query' => [
              'recipeid' => 'f255af6f-9614-4fe2-aa8b-1b77b936d9d6',
              'version' => '5',
              'source' => 'api',
              'LanguageCode' => 'en',
            ],
            'body' => $body,
            'headers' => [
              'content-type' => 'application/json'
            ]
          ]);

        $cart = \GuzzleHttp\json_decode($res->getBody(), true);

        $total = $cart['Items']['Price'] + $cart['Shipping']['Price'];
        /*foreach($cart['Items'] as $item) {
          $total = $total + $item['Price'];
        }*/


        return view('gooten.cartItems', compact('cart', 'SKU', 'quantity', 'postal_code', 'state'));
      }
    }

    public function getProducts(Request $request)
    {
      $productName = Input::get('productName');

      $client = new Client();

      $res = $client->get('https://api.print.io/api/v/5/source/api/products/',
        [
        'query' => [
          'recipeid' => 'f255af6f-9614-4fe2-aa8b-1b77b936d9d6',
          'languageCode' => 'en',
          'countryCode' => 'US',
          'all' => 'true'
        ],
        'headers' => [
          'content-type' => 'application/json'
        ]
      ]);

      $response = \GuzzleHttp\json_decode($res->getBody(), true);
      $products = $response['Products'];
      $selectedProducts = [];
      foreach ($products as $product)
      {
        if (str_contains($product['Name'], $productName))
        {
          array_push($selectedProducts, $product);
        }
      }

      //dd($products);

      return view('gooten.search', compact('products'));

    }

    public function getProductVariants(Request $request)
    {
      $productId = Input::get('productId');


      $client = new Client();

      $res = $client->get('https://api.print.io/api/v/5/source/api/productvariants/',
        [
          'query' => [
            'recipeid' => 'f255af6f-9614-4fe2-aa8b-1b77b936d9d6',
            'countryCode' => 'US',
            'productId' => $productId,
            'version' => '5',
            'source' => 'api',
            'all' => 'false',
            'languageCode' => 'en',
            'currencyCode' => 'USD'
          ],
          'headers' => [
            'content-type' => 'application/json'
          ]
        ]);

      $response = \GuzzleHttp\json_decode($res->getBody(), true);

      foreach ($response as $item)
      {
        dd($item);
      }

  }

    public function getShipment(Request $request)
    {

      $SKU = Input::get('SKU');
      $quantity = Input::get('quantity');
      $state = Input::get('state');
      $postal_code = Input::get('postal_code');
      $items = [];

      foreach ($SKU as $key=>$value) {
        if($value !== null) {
          $items[$key] = [
            'SKU' => $SKU[$key],
            'Quantity' => intval($quantity[$key]),
            'ShipCarrierMethodId' => 1,
            'Images' => [
              "Url" => "https:\/\/printio-widget-live.s3.amazonaws.com\/200E4604-4CD5-4E0C-A131-9F5AF25006E6.jpg",
              "Index" => 0,
              "ThumbnailUrl" => "https:\/\/printio-widget-live.s3.amazonaws.com\/200E4604-4CD5-4E0C-A131-9F5AF25006E6.jpg",
              "ManipCommand" => "",
              "SpaceId" => "0"
            ]
          ];
        }
      }

      $body = json_encode([
        'Items' => $items,
        "ShipToAddress" => [
          "FirstName" => "Gooten",
          "LastName" => "Test",
          "Line1" => "222 Broadway",
          "City" => "New York",
          "State" => "WA",
          "CountryCode" => "US",
          "PostalCode" => "98121",
          "IsBusinessAddress" => false,
          "Phone" => "1234567890",
          "Email" => "test@gooten.com"
        ],
        "LanguageCode" => "en",
        "CurrencyCode" => "USD",
        "ShipToCountry" => "US",
        "Payment" => [
          "CurrencyCode" => "USD"
        ]
      ]);


      $client = new Client();

      $res = $client->post('https://api.print.io/api/v/5/source/api/priceestimate/',
        [
          'query' => [
            'recipeid' => 'f255af6f-9614-4fe2-aa8b-1b77b936d9d6',
            'version' => '5',
            'source' => 'api',
            'LanguageCode' => 'en',
          ],
          'body' => $body,
          'headers' => [
            'content-type' => 'application/json'
          ]
        ]);

      $response = \GuzzleHttp\json_decode($res->getBody(), true);


      dd($response);
      $shipping_groups = $response['Result'];

      $total = 0;
      foreach($shipping_groups as $shipping_group) {
        $total = $total + $shipping_group['ShipOptions'][0]['Price']['Price'];
      }


      return view('gooten.shipping_output', compact('shipping_groups', 'total'));
    }

}







