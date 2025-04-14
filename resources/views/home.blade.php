@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section class="hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1>Transform Your Body with Pilates</h1>
                <p class="lead">Experience the power of controlled movement and mindful exercise.</p>
                <div class="hero-buttons">
                    <a href="{{ route('booking') }}" class="btn btn-primary btn-lg">Book a Class</a>
                    <a href="{{ route('about') }}" class="btn btn-outline-primary btn-lg">Learn More</a>
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('assets/hero-image.png') }}" alt="Pilates Class" class="img-fluid hero-image">
            </div>
        </div>
    </div>
</section>

<section class="features">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2>Why Choose Sou Pilates?</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-user-friends"></i>
                    </div>
                    <h3>Expert Instructors</h3>
                    <p>Our certified instructors have years of experience and are committed to helping you reach your goals.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-dumbbell"></i>
                    </div>
                    <h3>Modern Equipment</h3>
                    <p>State-of-the-art reformers and equipment to enhance your Pilates experience.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <h3>Flexible Schedule</h3>
                    <p>We offer classes throughout the day to fit your busy lifestyle.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="classes bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2>Our Classes</h2>
                <p class="lead">Discover the perfect class for your fitness journey</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="class-card">
                    <img src="{{ asset('assets/class-1.png') }}" alt="Beginner Pilates" class="img-fluid">
                    <div class="class-details">
                        <h3>Beginner Pilates</h3>
                        <p>Perfect for those new to Pilates. Learn the fundamentals and build a strong foundation.</p>
                        <a href="{{ route('classes') }}" class="btn btn-outline-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="class-card">
                    <img src="{{ asset('assets/class-2.png') }}" alt="Intermediate Reformer" class="img-fluid">
                    <div class="class-details">
                        <h3>Reformer Flow</h3>
                        <p>Take your practice to the next level with our reformer-based classes.</p>
                        <a href="{{ route('classes') }}" class="btn btn-outline-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="class-card">
                    <img src="{{ asset('assets/class-3.png') }}" alt="Advanced Pilates" class="img-fluid">
                    <div class="class-details">
                        <h3>Advanced Pilates</h3>
                        <p>Challenge yourself with complex movements and sequences for a full-body workout.</p>
                        <a href="{{ route('classes') }}" class="btn btn-outline-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12 text-center">
                <a href="{{ route('classes') }}" class="btn btn-primary btn-lg">View All Classes</a>
            </div>
        </div>
    </div>
</section>

<section class="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2>What Our Clients Say</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="testimonial-card">
                    <div class="testimonial-image">
                        <img src="{{ asset('assets/testimonial-1.png') }}" alt="Client Testimonial">
                    </div>
                    <div class="testimonial-content">
                        <p>"Sou Pilates has transformed my body and mind. I'm stronger, more flexible, and have much better posture."</p>
                        <h4>Sarah Johnson</h4>
                        <p class="client-info">Member since 2022</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial-card">
                    <div class="testimonial-image">
                        <img src="{{ asset('assets/testimonial-2.png') }}" alt="Client Testimonial">
                    </div>
                    <div class="testimonial-content">
                        <p>"The instructors are knowledgeable and attentive. I've never felt better in my life since starting Pilates here."</p>
                        <h4>Michael Chen</h4>
                        <p class="client-info">Member since 2023</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial-card">
                    <div class="testimonial-image">
                        <img src="{{ asset('assets/testimonial-3.png') }}" alt="Client Testimonial">
                    </div>
                    <div class="testimonial-content">
                        <p>"As someone with back issues, Sou Pilates has been life-changing. The personalized attention is amazing."</p>
                        <h4>Emma Rodriguez</h4>
                        <p class="client-info">Member since 2021</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h2>Ready to Start Your Pilates Journey?</h2>
                <p class="lead">Join us today and experience the transformation.</p>
            </div>
            <div class="col-md-4 text-center text-md-right">
                <a href="{{ route('booking') }}" class="btn btn-light btn-lg">Book Your First Class</a>
            </div>
        </div>
    </div>
</section>
@endsection