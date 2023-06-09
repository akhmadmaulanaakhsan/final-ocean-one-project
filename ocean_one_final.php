<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="oceanstyleV3.css" />

    <title>Ocean One</title>
    
  </head>
  <body>
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm sticky-top" style="background-color: #06bee1">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="assets/logooceanku.jpg" alt="Logo" width="55" height="55" class="d-inline-block align-text-top rounded-circle" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Actions</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#resources">Resources</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Project">Projects</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#explore">Explore</a>
              </li>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Jumbotron -->

    <section id="jumbotron"> 
        <div class="jumbotron">
            <h1 id="title" class="display-5 mb-4"></h1>
            <p id="description" class="lead mb-4"></p>
            <a id="actionButton" class="btn btn-primary" href="#" role="button"></a>
        </div>
    </section>
    
    <script>
    // Fungsi untuk memperbarui elemen HTML dengan data yang diperoleh dari PHP
    function updateJumbotron(data) {
        document.getElementById("title").textContent = data.title;
        document.getElementById("description").textContent = data.description;
        document.getElementById("actionButton").href = data.action_url;
        document.getElementById("actionButton").textContent = data.action_button_label;
    }

    // Fungsi untuk memperbarui data pada jumbotron
    function refreshJumbotron() {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var data = JSON.parse(this.responseText);
                updateJumbotron(data);
            }
        };
        xhr.open("GET", "connection.php", true);
        xhr.send();
    }

    // Memanggil fungsi refresh Jumbotron saat halaman dimuat dan setiap beberapa detik
    window.onload = function() {
        refreshJumbotron();
        setInterval(refreshJumbotron, 3000);
    };
    
    </script>

    <!-- Akhir Jumbotron -->

    <!-- OFFSET -->
    <section class="resources" id="resources">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>OFFSET YOUR PLASTIC FOOTPRINT</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h4>ALIGN</h4>
                    <div>
                        <p id="alignmentText" contenteditable="false">66% of people (73% of Millennials) are willing to pay more for products and services from companies committed to positive social and environmental impact.</p>
                    </div>
                    <a class="btn btn-primary" href="#" role="button">LEARN MORE</a>
                    <button class="btn btn-primary" onclick="toggleEditMode()">Edit</button>
                </div>
                <div class="col-md-4">
                    <h4>KICKSTART</h4>
                    <p>Ocean One is a turnkey solution to begin the journey of reducing your business's environmental footprint or going plastic neutral.</p>
                    <br>
                    <a class="btn btn-primary" href="#" role="button">START ACTION</a>
                </div>
                <div class="col-md-4">
                    <h4>AMPLIFY</h4>
                    <p>Is your action already making strides in its commitment to sustainability? Measure your action success using IMPACT.</p>
                    <br>
                    <a class="btn btn-primary" href="#" role="button">SEE HOW</a>
                </div>
            </div>
        </div>  
    </section>
    <!-- Akhir Offset -->

 
    <!--- MAKE YOUR IMPACT -->
    <section class="resourcesv2" id="source">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h2>MAKE YOUR IMPACT</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <img src="assets/logoocean.jpg" alt="a" class="rounded-circle" width="200" height="200">
                    <h4>COMMIT TO REMOVING A SPESIFIC AMOUNT</h4>
                </div>
                <div class="col-md-4">
                    <img src="assets/logoocean.jpg" alt="a" class="rounded-circle" width="200" height="200">
                    <h4>TIE REMOVAL TO PRODUCT SALES</h4>
                </div>
                <div class="col-md-4">
                    <img src="assets/logoocean.jpg" alt="a" class="rounded-circle" width="200" height="200">
                    <h4>INCENTIVIZE COMMUNITY ACTION</h4>
                </div>
            </div>
        </div>  
    </section>
    <!--- AKHIR MAKE YOUR IMPACT -->

    <!-- Project -->
    <section class="project" id="Project">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h4>PROJECT 1:</h4>
                    <h1>OCEANBOUND CLEAN UP</h1>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <img src="assets/chandler-cruttenden-vlmSzo9spvI-unsplash.jpg" alt="a" width="760" height="400">
                </div>
                <div class="col-md-6 mt-5 align-items-center">
                    <h3>PROBLEMS</h3>
                    <p style="text-align:left">Plastic recycling generates plastic waste effluent as a standard part of the process. 
                    This dirty discharge known as "Mud" is at risk of being discharged into the wastewater and, 
                    in the best-case, is usually taken to the nearest landfill.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mt-5 align-items-center">
                    <h3 style="text-align:right">SOLUTION</h3>
                    <p style="text-align:right">Repurposes the “Mud” into useful building materials. It's composition is perfect for producing bricks! 
                    Unfortunately, these recycled plastic compound bricks are slightly more expensive than standard building bricks, 
                    so Impac+ program incentivizes the reuse of the “Mud” in the bricks by making them competitive on the open market.</p>
                </div>
                <div class="col-md-6">
                    <img src="assets/Batu-Bata-Rhino-Machines-2-min.jpg" alt="a" width="760" height="400">
                </div>
            </div>
        </div>  
        <div class="container">
            <div class="row">
                <div class="col">
                    <h4>PROJECT 2:</h4>
                    <h1>FISHING GEAR RECOVERY</h1>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <img src="assets/isabela-kronemberger-gOY8kLhZhkE-unsplash.jpg" alt="a" width="760" height="400">
                </div>
                <div class="col-md-6 mt-5 align-items-center">
                    <h3>PROBLEMS</h3>
                    <p>Fishing gear - nets and ropes - pose a significant risk to sea life if cut away in the ocean. 
                        Unfortunately, incentives do not exist to recover this gear so at the end of its life, most gets landfilled or simply cut away at sea. 
                        It's a huge reason for why fishing nets are the largest ocean plastic polluter.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mt-5 align-items-center">
                    <h3 style="text-align:right">SOLUTION</h3>
                        <p style="text-align:right">We provides the funds needed to incentivize collection and recycling of this gear. 
                        This program creates a pathway for the reclamation of end of life fishing gear.</p>
                </div>
                <div class="col-md-6">
                    <img src="assets/nick-kane-dILfR7ABaos-unsplash.jpg" alt="a" width="760" height="400">
                </div>
            </div>
        </div>  
    </section>
    <!-- Akhir Project -->

    <!-- Contact -->
    <section class="contact" id="explore">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h2>GET IN TOUCH</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.173824071032!2d110.37492487542477!3d-7.771384692247983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59b2d4729729%3A0xac4d7b5fcf34f8e4!2sUniversitas%20Gadjah%20Mada!5e0!3m2!1sid!2sid!4v1683535909972!5m2!1sid!2sid" 
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-md-6">
                    <form id="myForm" onsubmit="submitForm(event)">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingName" placeholder="Name">
                            <label for="floatingName">Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingEmail" placeholder="name@example.com">
                            <label for="floatingEmail">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingMessage" style="height: 150px;"></textarea>
                            <label for="floatingMessage">Write your message here..</label>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </form>
                    <div id="message"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Contact -->


    <!-- Footer -->
    <footer class="py-3 my-4 border-top mt-4">
        <div class="container d-flex justify-content-between">  
            <p class="col-md-4 mb-0 text-muted"><a class="navbar-brand" href="#"><img src="assets/logoocean.jpg" alt="Logo" width="55" height="55" class="rounded-circle" ></a> Ocean One</p>
            <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            </a>
            <ul class="nav col-md-4 justify-content-end">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Newsletter</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Privacy policy</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
            </ul>    
        </div> 
    </footer>
    <!-- Akhir Footer -->


    <!-- happy code-->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <!-- Custom JS-->
    <script src="custom.js"></script>

    <!-- Tampilan 1 -->
    <script>
        // alert
        alert('Selamat datang di website Ocean One');
    </script>
    <!-- Akhir JS Tampilan 1 -->

    <!-- Tampilan 2 -->
    <script>
    function toggleEditMode() {
        var alignmentText = document.getElementById("alignmentText");
        if (alignmentText.contentEditable === "true") {
            alignmentText.contentEditable = "false";
            // Simpan perubahan ke server atau lakukan tindakan lain yang diperlukan
        } else {
            alignmentText.contentEditable = "true";
            alignmentText.focus();
        }
    }
    </script>
    <!-- Akhir JS Tampilan 2 -->

    <!-- Tampilan 3 -->
    <script>
        function submitForm(event) {
            event.preventDefault(); // Mencegah pengiriman form secara default
            
            // Mendapatkan nilai input dari form
            var name = document.getElementById('floatingName').value;
            var email = document.getElementById('floatingEmail').value;
            var message = document.getElementById('floatingMessage').value;
            
            // Menampilkan nama, email, dan pesan yang dikirim
            var messageDiv = document.getElementById('message');
            messageDiv.innerHTML = 'Thank you, ' + name + '! Your message has been sent.<br>';
            messageDiv.innerHTML += 'Name: ' + name + '<br>';
            messageDiv.innerHTML += 'Email: ' + email + '<br>';
            messageDiv.innerHTML += 'Message: ' + message;
            
            // Mengosongkan nilai input setelah pengiriman
            document.getElementById('floatingName').value = '';
            document.getElementById('floatingEmail').value = '';
            document.getElementById('floatingMessage').value = '';
        }
    </script>
    <!-- Akhir JS Tampilan 3 -->
  

    
  </body>
</html>
