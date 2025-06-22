<!-- SECTION FITUR -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<section class="pt-2 text-center position-relative"
    style="background: linear-gradient(to bottom, #ffffff 0%, #ffffff 60%, #d4edda 100%);">

    <!-- Bulatan Gradasi Merah Muda di Belakang -->
    <div style="
        position: absolute;
        top: 40px;
        left: 7px;
        width: 320px;
        height: 320px;
           background: radial-gradient(circle, 
        rgba(255, 193, 7, 0.31) 0%, 
        rgba(255, 193, 7, 0.08) 40%, 
        rgba(255, 209, 71, 0.03) 70%, 
        rgba(255, 255, 255, 0) 100%);
        border-radius: 50%;
        z-index: 0;
    "></div>

<!-- Bulatan 2 (di belakang card kiri, hanya sisi kiri yang terlihat) -->
<div style="
    position: absolute;
    top: 140px;
    left: 80px;
    width: 240px;
    height: 240px;
    background: radial-gradient(circle, 
        rgba(255, 193, 7, 0.2) 0%, 
        rgba(255, 193, 7, 0.08) 40%, 
        rgba(255, 209, 71, 0.03) 70%, 
        rgba(255, 255, 255, 0) 100%);
    border-radius: 50%;
    z-index: 2;
"></div>
<!-- Bulatan 3 (di belakang card kiri, hanya sisi kiri yang terlihat) -->
<div style="
    position: absolute;
    top: 250px;
    left: 180px;
    width: 380px;
    height: 240px;
    background: radial-gradient(circle, 
        rgba(255, 182, 193, 0.4) 0%,   /* soft pink */
        rgba(255, 182, 193, 0.16) 40%, 
        rgba(255, 182, 193, 0.05) 70%, 
        rgba(255, 255, 255, 0) 100%);
    border-radius: 50%;
    z-index: 2;
"></div>




    <!-- Kontainer Card di Atas Bulatan -->
    <div class="container p-4 rounded-top-4 position-relative" style="
        margin-top: -100px;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
        box-shadow: -6px 10px 0px -6px rgba(0, 0, 0, 0.1), 0px -8px 8px -6px rgba(0, 0, 0, 0.15);
        background: linear-gradient(to bottom, #ffffff 0%, #ffffff 60%, #e6f4ea 85%, #d4edda 100%);
     
    ">
        <h2 class="mb-8 h2 fw-bold mt-4">Apa yang akan kamu dapatkan <br> di Tracer Study?</h2>
        <p class="small">Start filling out the questionnaire and create your CV easily</p>
        <div class="row justify-content-center gx-4 mt-4 mb-6">
            <div class="col-sm-6 col-md-6 col-lg-5">
                <div class="p-5 border rounded-3 shadow-sm d-flex flex-column justify-content-between align-items-center w-100 mb-6  position-relative"
                    style="min-height: 280px; background-color:rgba(248, 248, 255, 0.9);    z-index: 3; ">
                    <div class="mb-2 mt-2">
                    <i class="bi bi-journal-text" style="font-size: 2rem; color: #f9a825;"></i>
                    </div>
                    <div class="text-center">
                        <h6 class="fw-semibold text-success small">Data Kuesioner</h6>
                        <p class="text-muted small mb-2">Isi pertanyaan dengan mudah dan cepat.</p>
                    </div>
                    <a href="#" class="text-decoration-none small mt-auto text-success">Get Started &rarr;</a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-5">
                <div class="p-5 border rounded-3 shadow-sm d-flex flex-column justify-content-between align-items-center w-100"
                    style="min-height: 280px;">
                    <div class="mb-2 mt-2">
                        <i class="bi bi-file-earmark-person" style="font-size: 2rem; color:rgb(140, 219, 255); "></i>
                    </div>
                    <div class="text-center">
                        <h6 class="fw-semibold text-success small">CV Builder</h6>
                        <p class="text-muted small mb-2">Buat CV profesional hanya dalam beberapa menit.</p>
                    </div>
                    <a href="#" class="text-decoration-none small mt-auto text-success">Mulai &rarr;</a>
                </div>
            </div>
            <!-- Garis Hijau di Tengah Bawah -->
            <div class="d-flex justify-content-center mt-5">
                <div style="height: 4px; width: 180px; background-color:rgb(56, 95, 57); border-radius: 2px;"></div>
            </div>

            
<!-- Bagian Career -->
<div class="row align-items-center mt-5 px-2">
    <div class="col-lg-6 offset-lg-1 text-lg-start text-center mb-4 mb-lg-0">
        <h2 class="h3 fw-bold text-success">Career Development Center UMY</h2>
        <p class="small text-muted mb-2">
        The distribution of job vacancy information, company recruitment, skill improvement activities, career coaching, alumni tracking, graduate tracer surveys, and graduate user focus group discussions (FGDs). CDC UMY provides job vacancy information from various companies to UMY students and alumni and cooperates with partner institutions and agencies. They also host webinars to enhance the soft and hard skills of students and alumni. CDC UMY also offers career coaching services to help students and alumni develop their careers.
        </p>
        <p class="small text-muted mb-0">
        In addition, CDC UMY conducts tracking of alumni to obtain information about their careers after graduation and conducts
        surveys to understand the relevance of UMY graduates in the job market. Finally, CDC UMY holds FGDs with graduate users
        such as the business and industry sector partners to gather insights and competencies together. With the operation of
        the Career Development Center (CDC), UMY students and alumni can better prepare and develop their future careers.
        </p>
    </div>
    <div class="col-lg-5 text-lg-start ">
        <img src="{{ asset('images/career1.svg') }}" class="img-fluid" alt="Career Image"
            style="max-width: 60%; height: auto;">
    </div>
</div>

<!-- Statistik -->
<div class="row text-start mt-5 g-5 justify-content-center">
    <div class="col-6 col-md-2">
        <div>
            <div class="d-flex align-items-end">
                <span class="fw-bold display-6 text-dark" style="line-height: 1;">25</span>
                <span style="font-size: 1rem; color: #90caf9; margin-left: 2px;">%</span>
            </div>
            <p class="small text-muted mt-1 mb-1">Tracking the Pulse<br>of Responsiveness</p>
            <div style="height: 4px; width: 70px; background-color: #90caf9; border-radius: 2px;"></div>
        </div>
    </div>
    <div class="col-6 col-md-2">
        <div>
            <div class="d-flex align-items-end">
                <span class="fw-bold display-6 text-dark" style="line-height: 1;">120</span>
                <span style="font-size: 1rem; color: #f44336; margin-left: 2px;">+</span>
            </div>
            <p class="small text-muted mt-1 mb-1">Employment<br>Readiness</p>
            <div style="height: 4px; width: 90px; background-color:rgb(248, 114, 73); border-radius: 2px;"></div>
        </div>
    </div>
    <div class="col-6 col-md-2">
        <div>
            <div class="d-flex align-items-end">
                <span class="fw-bold display-6 text-dark" style="line-height: 1;">120</span>
                <span style="font-size: 1rem; color: #4db6ac; margin-left: 2px;">+</span>
            </div>
            <p class="small text-muted mt-1 mb-1">Survey<br>Satisfaction</p>
            <div style="height: 4px; width: 80px; background-color: #4db6ac; border-radius: 2px;"></div>
        </div>
    </div>
    <div class="col-6 col-md-2">
        <div>
            <div class="d-flex align-items-end">
                <span class="fw-bold display-6 text-dark" style="line-height: 1;">120</span>
                <span style="font-size: 1rem; color: #fbc02d; margin-left: 2px;">%</span>
            </div>
            <p class="small text-muted mt-1 mb-1">CV<br>Post Power</p>
            <div style="height: 4px; width: 90px; background-color: #fbc02d; border-radius: 2px;"></div>
        </div>
    </div>
    <div class="col-6 col-md-2">
        <div>
            <div class="d-flex align-items-end">
                <span class="fw-bold display-6 text-dark" style="line-height: 1;">120</span>
                <span style="font-size: 1rem; color: #ef5350; margin-left: 2px;">+</span>
            </div>
            <p class="small text-muted mt-1 mb-1">Opportunities<br>Revolution</p>
            <div style="height: 4px; width: 50px; background-color:rgb(168, 58, 56); border-radius: 2px;"></div>
        </div>
    </div>
</div>



        </div>
    </div>
</section>