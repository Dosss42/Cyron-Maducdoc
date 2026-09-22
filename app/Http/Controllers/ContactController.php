<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactMessageRequest;
use App\Models\ContactMessage;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller
{
    /**
     * Store a message submitted through the contact form.
     */
    public function store(StoreContactMessageRequest $request): RedirectResponse
    {
        ContactMessage::create($request->validated());

        return redirect(route('home').'#contact')
            ->with('contactStatus', 'Thanks for reaching out! I\'ll get back to you soon.');
    }
}
