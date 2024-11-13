
@extends('components.layout') 
@section('title', 'About Us') 

@section('styles')
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Bebas+Neue&amp;family=Figtree:wght@300;600&amp;display=swap'>
    
    <link rel="stylesheet" href="{{ asset('styles/styles_a.css') }}">
@endsection

@section('content') 

    
<section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12 mx-auto text-center">
                <div class="image-container mb-4">
                    <img src="{{ URL('images/NAJE.jpg') }}" width="550" height="450" alt="NIÑO MIGUEL L. NAJE" class="profile-image">
                </div>
                <h1 class="text-light">NIÑO MIGUEL L. NAJE</h1>
                <h6 class="text-light">3rd year Student of Bicol University</h6>
                <p class="intro-text text-light mt-3">
                Hi, I’m Niño Miguel L. Naje, a 19-year-old Information Technology student from Kilicao, Daraga, Albay, currently in my third year at Bicol University (Main Campus). My academic journey in the BS Information Technology program has strengthened my foundation in essential skills like programming, web development, and digital design. I'm passionate about learning new technologies and continually seek opportunities to expand my knowledge and hands-on skills. Although I’m still early in my career, I bring a strong dedication to professional growth, teamwork, and adaptability.

I’m particularly interested in roles that allow me to apply my skills practically, learn from experienced professionals, and contribute meaningfully to a team. I’m excited to bring my problem-solving mindset, creativity, and determination to any opportunity that comes my way. My goal is to gain valuable industry experience and contribute to projects where I can make a real impact. I am actively seeking entry-level roles that do not require prior experience but provide the chance to develop professionally. I’m eager to connect with companies and teams looking for a driven and fast-learning IT student.
                </p>
            </div>
        </div>
    </div>
</section>

@endsection
