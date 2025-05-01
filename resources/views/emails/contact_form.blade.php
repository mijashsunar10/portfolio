<!DOCTYPE html>
 <html>
 
 <head>
     <title>Contact Us Message </title>
     @vite(['resources/css/app.css', 'resources/js/app.js'])
 </head>
 
 <body>
     <h2>Dawn in Nepal Adventures Pvt Ltd</h2>
     <p class="text-lg"><strong>Name:</strong> {{ $data['name'] }}</p>
     <p class="text-lg"><strong>Email:</strong> {{ $data['email'] }}</p>
     @if (!empty($data['subject']))
         <p class="text-lg"><strong>Subject:</strong> {{ $data['subject'] }}</p>
     @endif
     <p class="text-lg"><strong>Message:</strong> {{ $data['message'] }}</p>
 </body>
 
 </html>