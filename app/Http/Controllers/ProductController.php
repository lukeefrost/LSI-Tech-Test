<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendEnquiryRequest;
use App\Mail\ProductEnquiryEmail;
use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;

class ProductController extends Controller
{
    /**
     * Show Product details
     * @param Product $product
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function show(Product $product)
    {
        $product->load('images');

        return view('product.show', compact('product'));
    }

    /**
     * Submit the enquiry for the product
     * @param SendEnquiryRequest $request
     * @param Product $product
     * @return RedirectResponse
     */
    public function sendEnquiry(SendEnquiryRequest $request, Product $product): RedirectResponse
    {
        $data = $request->validated();

        Mail::to(config('mail.enquiry_email'))
            ->send(new ProductEnquiryEmail(
                product: $product,
                name: $data['name'],
                email: $data['email'],
                body: $data['message'],
            ));

        return back()->with('enquiry_sent', true);
    }
}
