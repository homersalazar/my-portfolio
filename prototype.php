.main .project-section .bg{
    background: var(--bg) !important;
    min-height: 20vh;
    height: 20%;
}

/* .main .project-section .bg2{
    min-height: 80vh;
    height: 80%;
    background-image: url("../image/samples.jpg") !important;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
} */

.main .project-section h1{
    font-size: 3rem;
    margin-top: 47px;
    background: var(--white);
    text-transform: capitalize;
    text-align: center;
    /* margin-bottom: 50px; */
    color: #1a1a1a;
    background-clip: text;
    -webkit-background-clip: text;
    -webkit-text-stroke: 1px transparent;
}

.main .project-section .project-main .project_title{
    font-size: 1.5rem;
    font-weight: bolder;
    color: var(--btn);
}
.main .project-section .project-main label{
    text-indent: 5%;
}

.main .project-section .card{
    background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
    /* background-size: 400% 400%; */
    animation: gradient 15s ease infinite;
    width: 100%;

}

@keyframes gradient {
    0% {
        background-position: 0% 50%;
    }

    50% {
        background-position: 100% 50%;
    }
        
    100% {
        background-position: 0% 50%;
    }
}

/* .main .project-section img{
    width: 340px;
} */

@media only screen and (max-width: 600px) {
    .main .project-section img{
        width: 100%;
      height: auto;
    }
  }

         <!-- <div id="project" class="project-section">
            <div class="row bg">
                <div class="col-lg-12">
                    <h1> MY PROJECTS</h1>
                </div>
            </div>
            <div class="project-main">
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-3 mt-5">
                        <div class="card" data-aos="fade-up-right">
                            <div class="card-body">
                                <img src="../image/project-dts.png" alt="dts" >
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-5" data-aos="fade-up-left">
                        <p class="mt-3 project_title"> Document Tracking System</p>
                        <label for="">"This software that enables users to efficiently and accurately monitor the progress of documents within an organization, from creation to distribution and final approval, ensuring accountability, transparency, and compliance with established procedures."</label>
                        <a type="button" class="btn btn-outline-primary shadow-none mt-4" href="404_page.php" target="_blank"><i class="fa-solid fa-eye"></i> View Site</a>
                        <a type="button" class="btn btn-outline-primary shadow-none  mt-4" href="https://github.com/homersalazar/dts" target="_blank"><i class="fa-solid fa-code"></i> View Code</a>
                    </div>
                </div> -->
                <!-- <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-3 mt-5">
                        <div class="card" data-aos="fade-up-right">
                            <div class="card-body">
                                <img src="../image/project-sms.png" alt="supplies management system" srcset="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-5" data-aos="fade-up-left">
                        <p class="mt-3 project_title"> Supplies Management System</p>
                        <label for="">Office supplies management system streamlines the process of ordering and tracking supplies, ensuring that your workplace always has the necessary items on hand to keep your team productive and efficient.</label>
                        <a type="button" class="btn btn-outline-primary shadow-none mt-4" href="404_page.php" target="_blank"><i class="fa-solid fa-eye"></i> View Site</a>
                        <a type="button" class="btn btn-outline-primary shadow-none  mt-4" href="https://github.com/homersalazar/office-supply" target="_blank"><i class="fa-solid fa-code"></i> View Code</a>
                    </div>
                </div> -->
                <!-- <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-3 mt-5">
                        <div class="card" data-aos="fade-up-right">
                            <div class="card-body">
                                <img src="../image/project-wis.png" alt="warehouse inventory system" srcset="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-5" data-aos="fade-up-left">
                        <p class="mt-3 project_title"> Warehouse Inventory System</p>
                        <label for="">Warehouse inventory system provides real-time visibility into your inventory levels, allowing you to easily track stock levels, monitor stock movements, and optimize your warehouse operations for maximum efficiency and profitability.</label>
                        <a type="button" class="btn btn-outline-primary shadow-none mt-4" href="404_page.php" target="_blank"><i class="fa-solid fa-eye"></i> View Site</a>
                        <a type="button" class="btn btn-outline-primary shadow-none  mt-4" href="https://github.com/homersalazar/warehouse" target="_blank"><i class="fa-solid fa-code"></i> View Code</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-3 mt-5" data-aos="fade-up-right">
                        <div class="card" >
                            <div class="card-body">
                                <img src="../image/project-osis.png" alt="office supplies inventory system" srcset="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-5" data-aos="fade-up-left">
                        <p class="mt-3 project_title"> Office Supplies Inventory System</p>
                        <label for="">Office supplies inventory system simplifies the process of managing your office inventory, providing you with a centralized database where you can easily track stock levels, monitor usage, and generate reports to help you make informed purchasing decisions.</label>
                        <a type="button" class="btn btn-outline-primary shadow-none mt-4" href="http://global-store.infinityfreeapp.com/global-store/dashboard/index.php" target="_blank"><i class="fa-solid fa-eye"></i> View Site</a>
                        <a type="button" class="btn btn-outline-primary shadow-none  mt-4" href="https://github.com/homersalazar/Global-store-php" target="_blank"><i class="fa-solid fa-code"></i> View Code</a>
                    </div>
                </div> -->
            <!-- </div> -->