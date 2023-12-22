@extends('layouts.layout')

@section('content')
    <h1>MICROSOFT CUSTOMER SUPPORT</h1>
    <p>Helo and welcome to Microsoft cusmoter suport. We hier are America people from California that repair computer. Your computer has virus? You come to us!!</p>
    <div class="review-container">
        <div>
            <img class="review-image" src="https://previews.123rf.com/images/gdolgikh/gdolgikh1503/gdolgikh150300146/37948863-group-of-happy-young-people-showing-thumbs-up-isolated-on-white-background.jpg" />
            <div>Hapy customers: {{ $happy_customers }}</div>
        </div>
        <div>
            <img class="review-image" src="https://miro.medium.com/v2/resize:fit:679/0*zrCxncZX0BeAm4e7" />
            <div>Not hapy customers: 0 (all customer hapy)</div>
        </div>
    </div>
@endsection
