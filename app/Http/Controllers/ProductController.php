<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendEnquiryRequest;
use App\Mail\ProductEnquiry;
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
        $validated = $request->validated();

        return back()->with('enquiry_sent', true);
    }
}
