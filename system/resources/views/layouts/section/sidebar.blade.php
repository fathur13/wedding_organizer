<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<section>
    <ul class="sidebar">
        <li class="nav-item">
            <a href="#home" class="nav-link">
                <i class="fas fa-home"></i>
                <span class="title">Home</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#tentang" class="nav-link">
                <i class="fas fa-info"></i>
                <span class="title">Tentang</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#fitur" class="nav-link">
                <i class="fas fa-list"></i>
                <span class="title">Fitur</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#portofolio" class="nav-link">
                <i class="fas fa-image"></i>
                <span class="title">Portofolio</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#blog" class="nav-link">
                <i class="fas fa-clipboard"></i>
                <span class="title">Blog</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#kontak" class="nav-link">
                <i class="fas fa-user"></i>
                <span class="title">Kontak</span>
            </a>
        </li>
    </ul>
</section>
<style>
    .sidebar {
        position: fixed;
        top: 50%;
        transform: translateY(-50%);
        background-color: #EDF3F8;
    }
    .nav-item {
        position: relative;
    }
    .nav-item:not(:last-child){
        margin-bottom: 20px;
    }
    .nav-link {
        color:#414141;
        text-decoration: none;
        font-size: 25px;
        font-family: "Montserrat", sans-serif;
    }
    .nav-link .fas {
        color: #414141
    }
    .nav-link i {
        width: 70px;
        height: 70px;
        display: inline-flex;
        justify-content: center;
        align-items: center;
        background-color: #EDF3F8;
        transition: all 0.3s;
    }
    .nav-item:hover i{
        transform: scale(1.1);
        box-shadow: 10px 0 20px;
    }
    .nav-link .title {
        position: absolute;
        background-color: #EDF3F8;
        height: 100%;
        padding-right:65px;
        padding-left:20px;
        line-height: 70px;
        transform: translateX(-200%);
        z-index: -1;
        transition: all 0.3s; 
    }
    .nav-link:hover .title {
        transform: translateX(0);
    }
    
</style>
