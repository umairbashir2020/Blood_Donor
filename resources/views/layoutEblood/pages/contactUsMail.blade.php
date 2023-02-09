<h2>Hey, It's me {{ $contactData['name'] }}</h2>
<br>

<strong>Contact Details: </strong><br>
<strong>Name: </strong>{{ $contactData['name'] }} <br>
<strong>Email: </strong>{{ $contactData['email'] }} <br>
{{-- <strong>Phone: </strong>{{ $contactData->phone_number }} <br> --}}
<strong>Phone: </strong>{{ $contactData['address'] }} <br>

<strong>Subject: </strong>{{ $contactData['message'] }} <br>
{{-- <strong>Message: </strong>{{ $data->user_query }} <br><br> --}}

Thank you
