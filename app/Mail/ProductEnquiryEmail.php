<?php

namespace App\Mail;

use App\Models\Product;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ProductEnquiryEmail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public readonly Product $product,
        public readonly string $name,
        public readonly string $email,
        public readonly string $body,
    ) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            replyTo: [$this->email],
            subject: "Product Enquiry: {$this->product->name}",
        );
    }

    public function content(): Content
    {
        return new Content(view: 'mail.product-enquiry-email');
    }

    public function attachments(): array
    {
        return [];
    }
}
