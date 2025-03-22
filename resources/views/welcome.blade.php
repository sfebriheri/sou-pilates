<!-- welcome.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sou Pilates - Discover your Balance with us</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    <style>
        /* Custom CSS */
        :root {
            --primary-blue: #1a306e;
            --secondary-beige: #f5f4ee;
            --text-dark: #333333;
            --text-light: #ffffff;
        }

        body {
            font-family: 'Instrument Sans', sans-serif;
            color: var(--text-dark);
            margin: 0;
            padding: 0;
        }

        /* Header styling */
        .header {
            background-color: var(--primary-blue);
            color: var(--text-light);
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 5%;
            position: relative;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
        }

        .nav-links a {
            color: var(--text-light);
            text-decoration: none;
            font-weight: 500;
        }

        .account-btn {
            background-color: white;
            color: var(--primary-blue);
            border-radius: 999px;
            padding: 0.5rem 1.5rem;
            text-decoration: none;
            font-weight: 500;
        }

        /* Hero Section Styles */
        .hero-section {
            display: flex;
            justify-content: space-between;
            padding: 4rem 5%;
            max-width: 1200px;
            margin: 0 auto;
        }

        .hero-content {
            flex: 1;
            padding-right: 3rem;
        }

        .hero-title {
            font-size: 2.5rem;
            color: #1a306e;
            margin-bottom: 0.5rem;
            font-weight: 600;
        }

        .hero-subtitle {
            font-size: 1.5rem;
            color: #1a306e;
            margin-bottom: 1.5rem;
            font-weight: 500;
        }

        .hero-description {
            line-height: 1.6;
            margin-bottom: 2rem;
            color: #555;
        }

        .hero-buttons {
            display: flex;
            gap: 1rem;
        }

        .hero-button {
            display: inline-flex;
            align-items: center;
            padding: 0.8rem 1.5rem;
            border-radius: 4px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .hero-button.primary {
            background-color: #1a306e;
            color: white;
        }

        .hero-button.secondary {
            border: 1px solid #1a306e;
            color: #1a306e;
        }

        .hero-button .icon {
            margin-left: 0.5rem;
        }

        .hero-image {
            flex: 1;
            min-height: 400px;
            border-radius: 8px;
            overflow: hidden;
        }

        .hero-image-content {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }


        /* Statistics Section Styles */
        .stats-section {
            background-color: #f8f7f2;
            padding: 4rem 5%;
            text-align: center;
        }

        .stats-title {
            font-size: 2rem;
            color: #1a306e;
            margin-bottom: 3rem;
            font-weight: 600;
        }

        .stats-container {
            display: flex;
            justify-content: center;
            gap: 5rem;
            max-width: 1000px;
            margin: 0 auto;
        }

        .stat-item {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .stat-icon {
            margin-bottom: 1rem;
        }

        .icon-placeholder {
            width: 60px;
            height: 60px;
            background-color: #e0dfd8;
            border-radius: 50%;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: #1a306e;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            font-size: 1.1rem;
            color: #555;
        }

        /* Class Options Section Styles */
        .classes-section {
            padding: 5rem 5%;
            text-align: center;
        }

        .classes-title {
            font-size: 2rem;
            color: #1a306e;
            margin-bottom: 3rem;
            font-weight: 600;
        }

        .classes-container {
            display: flex;
            justify-content: center;
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .class-card {
            width: 30%;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .class-card:hover {
            transform: translateY(-5px);
        }

        .class-image {
            height: 250px;
            background-color: #f0f0f0;
            /* Placeholder until image is added */
        }

        .class-details {
            padding: 1.5rem;
            background-color: white;
        }

        .class-name {
            font-size: 1.3rem;
            color: #1a306e;
            margin-bottom: 1rem;
            font-weight: 500;
        }

        .class-price {
            font-size: 1rem;
            font-weight: 600;
            color: white;
            background-color: #1a306e;
            padding: 0.5rem 1rem;
            border-radius: 25px;
            display: inline-block;
        }

        /* Trainers Section Styles */
        .trainers-section {
            padding: 5rem 5%;
            background-color: #f8f7f2;
        }

        .trainers-title {
            font-size: 2rem;
            color: #1a306e;
            margin-bottom: 3rem;
            font-weight: 600;
            text-align: center;
        }

        .trainers-container {
            display: flex;
            justify-content: center;
            gap: 2.5rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .trainer-card {
            background-color: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            display: flex;
            width: 45%;
        }

        .trainer-image {
            width: 120px;
            height: 150px;
            background-color: #f0f0f0;
            /* Placeholder until image is added */
            flex-shrink: 0;
        }

        .trainer-details {
            padding: 1.5rem;
            flex-grow: 1;
        }

        .trainer-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
        }

        .trainer-name {
            font-size: 1.2rem;
            color: #1a306e;
            font-weight: 600;
        }

        .trainer-rating {
            display: flex;
            align-items: center;
            gap: 0.3rem;
        }

        .rating-number {
            font-size: 0.9rem;
            color: #555;
        }

        .star-icon {
            color: #ffc107;
        }

        .trainer-bio {
            font-size: 0.9rem;
            line-height: 1.5;
            color: #666;
        }

        /* Testimonials Section Styles */
        .testimonials-section {
            padding: 5rem 5%;
        }

        .testimonials-title {
            font-size: 2rem;
            color: #1a306e;
            margin-bottom: 3rem;
            font-weight: 600;
            text-align: center;
        }

        .testimonials-container {
            display: flex;
            justify-content: center;
            gap: 2.5rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .testimonial-card {
            background-color: #f8f7f2;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            display: flex;
            width: 45%;
        }

        .testimonial-image {
            width: 120px;
            height: 180px;
            background-color: #e0dfd8;
            /* Placeholder until image is added */
            flex-shrink: 0;
        }

        .testimonial-content {
            padding: 1.5rem;
            flex-grow: 1;
        }

        .testimonial-name {
            font-size: 1.2rem;
            color: #1a306e;
            font-weight: 600;
            margin-bottom: 0.3rem;
        }

        .testimonial-subtitle {
            font-size: 0.9rem;
            color: #e67e22;
            margin-bottom: 1rem;
            font-weight: 500;
        }

        .testimonial-text {
            font-size: 0.9rem;
            line-height: 1.5;
            color: #666;
            margin-bottom: 1rem;
        }

        .testimonial-rating {
            display: flex;
        }

        .star {
            color: #ffc107;
            font-size: 1.1rem;
        }

        /* Booking/Calendar Section Styles */
        .booking-section {
            padding: 5rem 5%;
            background-color: #f8f7f2;
        }

        .booking-title {
            font-size: 2rem;
            color: #1a306e;
            margin-bottom: 3rem;
            font-weight: 600;
            text-align: center;
        }

        .booking-container {
            display: flex;
            justify-content: space-between;
            gap: 3rem;
            max-width: 1000px;
            margin: 0 auto;
        }

        .calendar-container {
            flex: 1;
            background-color: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            padding: 1.5rem;
        }

        .calendar-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .current-month {
            font-size: 1.2rem;
            font-weight: 600;
            color: #1a306e;
        }

        .calendar-nav {
            background: none;
            border: none;
            font-size: 1rem;
            color: #555;
            cursor: pointer;
        }

        .weekdays {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            text-align: center;
            font-weight: 500;
            color: #777;
            margin-bottom: 0.8rem;
        }

        .days {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 0.5rem;
            text-align: center;
        }

        .day {
            padding: 0.5rem 0;
            cursor: pointer;
            border-radius: 50%;
            width: 2rem;
            height: 2rem;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
        }

        .day.active {
            background-color: #1a306e;
            color: white;
        }

        .day:hover:not(.active) {
            background-color: #e0e0e0;
        }

        .schedule-container {
            flex: 1;
        }

        .schedule-title {
            font-size: 1.2rem;
            color: #1a306e;
            margin-bottom: 1.5rem;
            font-weight: 500;
        }

        .class-type-tabs {
            display: flex;
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .class-type-tab {
            padding: 0.6rem 1.2rem;
            background-color: white;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-size: 0.9rem;
            color: #555;
        }

        .class-type-tab.active {
            background-color: #1a306e;
            color: white;
        }

        .time-slots {
            display: flex;
            flex-direction: column;
            gap: 0.8rem;
            margin-bottom: 2rem;
        }

        .time-slot {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 0.7rem 1rem;
            background-color: rgba(255, 255, 255, 0.7);
            border-radius: 25px;
        }

        .time {
            font-weight: 600;
            color: #1a306e;
            background-color: #e0dfd8;
            padding: 0.3rem 0.6rem;
            border-radius: 15px;
            font-size: 0.9rem;
        }

        .day-label {
            color: #555;
            font-size: 0.9rem;
        }

        .book-button {
            background-color: #1a306e;
            color: white;
            border: none;
            padding: 0.8rem 1.5rem;
            border-radius: 25px;
            font-weight: 500;
            cursor: pointer;
            display: block;
            margin-left: auto;
        }

        .book-button:hover {
            background-color: #152457;
        }


        /* Footer Section Styles */
        .footer {
            background-color: #1a306e;
            color: white;
            padding: 4rem 5%;
        }

        .footer-container {
            display: flex;
            justify-content: space-between;
            max-width: 1200px;
            margin: 0 auto;
        }

        .footer-left,
        .footer-center,
        .footer-right {
            flex: 1;
        }

        .footer-logo {
            margin-bottom: 1.5rem;
        }

        .footer-logo h3 {
            font-size: 1.8rem;
            font-weight: 600;
        }

        .footer-address {
            font-size: 0.9rem;
            line-height: 1.6;
            margin-bottom: 1.5rem;
            color: rgba(255, 255, 255, 0.8);
        }

        .locate-button {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            background-color: transparent;
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: white;
            padding: 0.6rem 1rem;
            border-radius: 25px;
            font-size: 0.9rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .locate-button:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .location-icon {
            font-size: 1.1rem;
        }

        .footer-heading {
            font-size: 1.1rem;
            font-weight: 500;
            margin-bottom: 1.5rem;
        }

        .social-links {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .social-link {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            font-size: 0.9rem;
            transition: color 0.3s ease;
        }

        .social-link:hover {
            color: white;
        }

        .social-icon {
            font-size: 1.1rem;
        }

        .newsletter-input {
            width: 100%;
            padding: 0.8rem 1rem;
            border-radius: 25px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
            font-size: 0.9rem;
        }

        .newsletter-input::placeholder {
            color: rgba(255, 255, 255, 0.6);
        }

        .newsletter-input:focus {
            outline: none;
            border-color: rgba(255, 255, 255, 0.5);
        }
    </style>
</head>

<body>
    <!-- Header Section -->
    <header class="header">
        <div class="logo">
            <!-- Logo will go here -->
            <h1>Sou Pilates</h1>
        </div>

        <nav class="nav-links">
            <a href="#">Home</a>
            <a href="#">Classes</a>
            <a href="#">Trainers</a>
            <a href="#">About Us</a>
        </nav>

        <a href="#" class="account-btn">Account</a>
    </header>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-content">
            <h1 class="hero-title">Sou Pilates</h1>
            <h2 class="hero-subtitle">Discover your Balance with us</h2>
            <p class="hero-description">
                At Sou Pilates, we believe in the power of movement to transform health, strength, flexibility, and
                wellness through expertly guided Pilates practices. Our instructors are dedicated to helping you achieve
                a balanced physical and mental state. We provide a premium experience tailored to all fitness levels,
                ensuring proper form, optimal results and safety. Our programs are crafted to support everyone's goals
                and needs.
            </p>
            <div class="hero-buttons">
                <a href="#" class="hero-button primary">Explore Our Studio</a>
                <a href="#" class="hero-button secondary">Explore our Offers <span class="icon">+</span></a>
            </div>
        </div>
        <div class="hero-image">
            <img src="{{ asset('assets/rectangle-110.png') }}" alt="Pilates class" class="hero-image-content">
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="stats-section">
        <h2 class="stats-title">Join a Thriving Pilates Family</h2>
        <div class="stats-container">
            <div class="stat-item">
                <div class="stat-icon">
                    <!-- Icon placeholder for certified trainers -->
                    <img src="{{ asset('/assets/reward-20.png') }}" alt="Certified trainers">
                </div>
                <div class="stat-number">10</div>
                <div class="stat-label">Certified trainers</div>
            </div>

            <div class="stat-item">
                <div class="stat-icon">
                    <!-- Icon placeholder for students -->
                    <img src="{{ asset('/assets/user-1-20.png') }}" alt="Students">
                </div>
                <div class="stat-number">1,000+</div>
                <div class="stat-label">Students</div>
            </div>

            <div class="stat-item">
                <div class="stat-icon">
                    <!-- Icon placeholder for classes -->
                    <img src="{{ asset('/assets/pilates-10.png ') }}" alt="Classes">
                </div>
                <div class="stat-number">10</div>
                <div class="stat-label">Classes</div>
            </div>
        </div>
    </section>

    <!-- Class Options Section -->
    <section class="classes-section">
        <h2 class="classes-title">Join a Class & Transform Your Body</h2>
        <div class="classes-container">
            <div class="class-card">
                <div class="class-image">
                    <img src="{{ asset('assets/rectangle-204.png') }}" alt="Pilates class">
                </div>
                <div class="class-details">
                    <div class="class-name"></div>
                    <h3 class="class-name">Single Reformer</h3>
                    <div class="class-price">IDR 199,000</div>
                </div>
            </div>

            <div class="class-card">
                <div class="class-image">
                    <img src="{{ asset('assets/rectangle-204.png') }}" alt="Pilates class">
                </div>
                <div class="class-details">
                    <h3 class="class-name">Monthly Package</h3>
                    <div class="class-price">IDR 199,000</div>
                </div>
            </div>

            <div class="class-card">
                <div class="class-image">
                    <img src="{{ asset('assets/rectangle-206.png') }}" alt="Pilates class">
                </div>
                <div class="class-details">
                    <h3 class="class-name">Yearly Package</h3>
                    <div class="class-price">IDR 199,000</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trainers Section -->
    <section class="trainers-section">
        <h2 class="trainers-title">Find the Perfect Trainer for You</h2>
        <div class="trainers-container">
            <div class="trainer-card">
                <img src="{{ asset('assets/rectangle-230.png') }}" >
                <div class="trainer-details">
                    <div class="trainer-header">
                        <h3 class="trainer-name">John Doe</h3>
                        <div class="trainer-rating">
                            <span class="rating-number">4.6</span>
                            <span class="star-icon">★</span>
                        </div>
                    </div>
                    <p class="trainer-bio">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac ligula et mauris vulputate
                        pharetra. Curabitur eu velit lobortis, dignissim facilisis, sed non tristique. Id interdum velit
                        erat egestas. Praesent vehicula lectus nisl, sit amet vulputate eros volutpat eu.
                    </p>
                </div>
            </div>

            <div class="trainer-card">
                <img src="{{ asset('assets/rectangle-231.png') }}" >
                <div class="trainer-details">
                    <div class="trainer-header">
                        <h3 class="trainer-name">John Doe</h3>
                        <div class="trainer-rating">
                            <span class="rating-number">4.7</span>
                            <span class="star-icon">★</span>
                        </div>
                    </div>
                    <p class="trainer-bio">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac ligula et mauris vulputate
                        pharetra. Curabitur eu velit lobortis, dignissim facilisis, sed non tristique. Id interdum velit
                        erat egestas. Praesent vehicula lectus nisl, sit amet vulputate eros volutpat eu.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <h2 class="testimonials-title">See Why Our Members Love Us</h2>
        <div class="testimonials-container">
            <div class="testimonial-card">
                <img src="{{ asset('assets/ellipse-40.png') }}" >
                <div class="testimonial-content">
                    <h3 class="testimonial-name">Jane Doe</h3>
                    <div class="testimonial-subtitle">Mind, Body, and Soul</div>
                    <p class="testimonial-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac ligula et mauris vulputate
                        pharetra. Curabitur eu velit lobortis, sed non tristique. Id interdum velit erat egestas
                        adipisci facilitas, sed non velit eros volutpat eu sed vulputate eros volutpat eu.
                    </p>
                    <div class="testimonial-rating">
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                    </div>
                </div>
            </div>

            <div class="testimonial-card">
                <img src="{{ asset('assets/ellipse-41.png') }}" >
                <div class="testimonial-content">
                    <h3 class="testimonial-name">Jane Doe</h3>
                    <div class="testimonial-subtitle">Mind, Body, and Soul</div>
                    <p class="testimonial-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac ligula et mauris vulputate
                        pharetra. Curabitur eu velit lobortis, sed non tristique. Id interdum velit erat egestas
                        adipisci facilitas, sed non velit eros volutpat eu sed vulputate eros volutpat eu.
                    </p>
                    <div class="testimonial-rating">
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Booking/Calendar Section -->
    <section class="booking-section">
        <h2 class="booking-title">Reserve Your Spot Now</h2>
        <div class="booking-container">
            <div class="calendar-container">
                <div class="calendar-header">
                    <button class="calendar-nav prev">&#10094;</button>
                    <div class="current-month">March</div>
                    <button class="calendar-nav next">&#10095;</button>
                </div>
                <div class="weekdays">
                    <div>Sun</div>
                    <div>Mon</div>
                    <div>Tue</div>
                    <div>Wed</div>
                    <div>Thu</div>
                    <div>Fri</div>
                    <div>Sat</div>
                </div>
                <div class="days">
                    <!-- Calendar days -->
                    <div class="day">1</div>
                    <div class="day">2</div>
                    <div class="day">3</div>
                    <div class="day">4</div>
                    <div class="day">5</div>
                    <div class="day">6</div>
                    <div class="day">7</div>
                    <div class="day">8</div>
                    <div class="day">9</div>
                    <div class="day">10</div>
                    <div class="day">11</div>
                    <div class="day">12</div>
                    <div class="day">13</div>
                    <div class="day active">14</div>
                    <div class="day">15</div>
                    <div class="day">16</div>
                    <div class="day">17</div>
                    <div class="day">18</div>
                    <div class="day">19</div>
                    <div class="day">20</div>
                    <div class="day">21</div>
                    <div class="day">22</div>
                    <div class="day">23</div>
                    <div class="day">24</div>
                    <div class="day">25</div>
                    <div class="day">26</div>
                    <div class="day">27</div>
                    <div class="day">28</div>
                    <div class="day">29</div>
                    <div class="day">30</div>
                    <div class="day">31</div>
                </div>
            </div>

            <div class="schedule-container">
                <h3 class="schedule-title">Time Schedule:</h3>
                <div class="class-type-tabs">
                    <button class="class-type-tab active">Single Reformer</button>
                    <button class="class-type-tab">Aerial Class</button>
                    <button class="class-type-tab">Group Class</button>
                </div>

                <div class="time-slots">
                    <div class="time-slot">
                        <span class="time">09:00</span>
                        <span class="day-label">Monday</span>
                    </div>
                    <div class="time-slot">
                        <span class="time">10:00</span>
                        <span class="day-label">Monday</span>
                    </div>
                    <div class="time-slot">
                        <span class="time">07:00</span>
                        <span class="day-label">Monday</span>
                    </div>
                    <div class="time-slot">
                        <span class="time">07:00</span>
                        <span class="day-label">Monday</span>
                    </div>
                    <div class="time-slot">
                        <span class="time">07:00</span>
                        <span class="day-label">Monday</span>
                    </div>
                </div>

                <button class="book-button">Book our Classes →</button>
            </div>
        </div>
    </section>


    <!-- Footer Section -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-left">
                <div class="footer-logo">
                    <img src = "{{ asset('assets/logo.png') }}" alt="Sou Pilates">
                </div>
                <div class="footer-address">
                    Jl. KH. Mas Mansyur No (blok 7, RW 6)
                    <br>Tanah Abang, Kota Jakarta Pusat,
                    <br>Daerah Khusus Ibukota Jakarta
                </div>
                <button class="locate-button">
                    <span class="location-icon"></span>
                    <img src="assets/image-40.png">
                    <h3> Locate our Studio</h3>
                </button>
            </div>

            <div class="footer-center">
                <h3 class="footer-heading">Follow Us for Exclusive Updates</h3>
                <div class="social-links">
                    <a href="#" class="social-link">
                        <span class="social-icon">📱</span> Instagram
                    </a>
                    <a href="#" class="social-link">
                        <span class="social-icon">📱</span> WhatsApp
                    </a>
                </div>
            </div>

            <div class="footer-right">
                <h3 class="footer-heading">Subscribe to Our Newsletter and Promos</h3>
                <div class="newsletter-form">
                    <input type="email" placeholder="Drop your email here →" class="newsletter-input">
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
