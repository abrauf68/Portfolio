@extends('layouts.mails.master')

@section('title', 'Contact Form Submission Mail')

@section('css')
@endsection

@section('content')
    <p>{{ __('Hi') }} <strong>{{ \App\Helpers\Helper::getCompanyName() }}</strong>,</p>

    <p>You have received a new contact form submission. Below are the details:</p>

    <hr>

    <p><strong>Name:</strong> {{ $contact->name }}</p>
    <p><strong>Email:</strong> {{ $contact->email }}</p>
    <p><strong>Phone Number:</strong> {{ $contact->phone }}</p>
    <p><strong>Subject:</strong> {{ $contact->subject }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $contact->message }}</p>

    <hr>

    <p>You can respond to this message via email or log in to the dashboard for more actions.</p>

    <a href="{{ route('dashboard') }}" class="cta-button">{{ __('Go to Dashboard') }}</a>
@endsection

@section('script')
@endsection
