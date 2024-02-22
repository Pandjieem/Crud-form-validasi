<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>index</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' href='style.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" crossorigin="anonymous">
</head>
<body>
    <style>
    *{
    margin: 0; 
    padding: 0;
    box-sizing: border-box;
    font-family: arial;
}

body{
    background: url(Lumine.jpg) no-repeat;
    background-size:cover ;
    height: 100vh;
    background-position: center;
}

.main-content{
    padding: 45px;
}


#test{
    border: 2px solid;
    width: 100%;
}

header{
    width: 100%;
    height: 100px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: fixed;
    z-index: 99;
    box-shadow: 0 0 10px #000;
    background-color: rgba(116, 16, 16, 0.5);
}

#chk1{
    display: none;
}

i{
    color: #fff;
    cursor: pointer;
}

header .logo{
    flex: 1;
    color: #fff;
    margin-left: 50px;
    text-transform: uppercase;
    font-size: 15px;
}

header .search-box{
    flex: 1;
    position: relative;
}

.search-box input{
    width: 100%;
    height: 40px;
    border: none;
    outline: none;
    background: #f2f2f2;
    border-radius: 30px;
    color: gray;
    font-size: 16px;
    text-align: center;
    padding-left: 5px;
    padding-right: 40px;
 
}

.search-box button{
    cursor: pointer;
    width: 40px;
    height: 38px;
    border-radius: 30px;
    border: none;
    position: absolute;
    top: -29px;
    left: -245px;
    right: 0;
    transform: scale(0.9);
    background: rgba(3, 47, 3, 0.651);
}

header ul{
    flex: 2;
    display: flex;
    justify-content: space-between;
}

header ul li{
    list-style: none;
}

header ul li a{
    text-decoration: none;
    color: white;
    font-weight: 600;
    text-transform: uppercase;
    padding: 10px 15px;
}

header ul li a:hover{
    border-bottom: 2px solid cadetblue;
}

header .menu{
    font-size: 2.5em;
    display: none;
}

@media(max-width:1000px){
    .search-box button{
        position: absolute;
    }
    header ul{
        position: fixed;
        top: 100px;
        right: -100%;
        background: rgba(0, 0, 0, 0.5);
        height: calc(100vh - 100px);
        width: 50%;
        flex-direction: column;
        align-items: center;
        transition: right 0.5s linear;
    }
    header .menu{
        display: block;
        width: 100px;
        text-align: center;
    }
    #chk1:checked ~ ul{
        right: 0;
    }
}

@media(max-width:600px){
    header .logo{
        font-size: 10px;
        margin-left: 8px;

    }
    header ul{
        width: 100%;
    }
}




/* Handphone */



@media(max-width:400px){
    *{
        margin: 0; 
        padding: 0;
        box-sizing: border-box;
        font-family: arial;
    }
    
    body{
        background: url(genshinbackground.jpg) no-repeat;
        background-size:cover ;
        height: 100vh;
        background-position: center;
    }
    
    header{
        width: 100%;
        height: 100px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: fixed;
        z-index: 99;
        box-shadow: 0 0 10px #000000;
        background-color: rgba(116, 16, 16, 0.5);
    }
    
    #chk1{
        display: none;
    }
    
    i{
        color: #fff;
        cursor: pointer;
    }
    
    header .logo{
        flex: 1;
        color: #fff;
        margin-left: 50px;
        text-transform: uppercase;
        font-size: 15px;
    }
    
    header .search-box{
        flex: 1;
        position: relative;
    }
    
    .search-box input{
        width: 100%;
        height: 30px;
        border: none;
        outline: none;
        background: #f2f2f2;
        border-radius: 30px;
        color: gray;
        position: relative;
        left: 10px;
        font-size: 16px;
        text-align: center;
        padding-left: 5px;
        padding-right: 40px;
        margin-right: 110px;
     
    }
    
    .search-box button{
        cursor: pointer;
        width: 25px;
        height: 25px;
        border-radius: 30px;
        border: none;
        position: absolute;
        top: 2px;
        left: 12px;
        right: 0;
        transform: scale(0.9);
        background: rgba(3, 47, 3, 0.651);
        
    }
    
    header ul{
        flex: 2;
        display: flex;
        justify-content: space-between;
    }
    
    header ul li{
        list-style: none;
    }
    
    header ul li a{
        text-decoration: none;
        color: white;
        font-weight: 600;
        text-transform: uppercase;
        padding: 10px 15px;
    }
    
    header ul li a:hover{
        border-bottom: 2px solid cadetblue;
    }
    
    header .menu{
        font-size: 2.5em;
        display: none;
    }
    
    @media(max-width:1000px){
        .search-box button{
            position: absolute;
        }
        header ul{
            position: fixed;
            top: 100px;
            right: -100%;
            background: rgba(0, 0, 0, 0.5);
            height: calc(100vh - 100px);
            width: 50%;
            flex-direction: column;
            align-items: center;
            transition: right 0.5s linear;
        }
        header .menu{
            display: block;
            width: 100px;
            text-align: center;
        }
        #chk1:checked ~ ul{
            right: 0;
        }
    }
    
    @media(max-width:400px){
        header .logo{
            font-size: 10px;
            margin-left: 8px;
            position: relative;
            left: 10px;
    
        }
        header ul{
            width: 100%;
        }
    }

    #srch{
        padding-left: 40px;
        font-size: 10px;
    }
   
}


/* validasiform */


.container form{
    width: 90%;
    max-width: 500px;
    padding: 50px 30px 20px;
    background-color: #2F4F4F;
    border-radius: 4px;
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.5);
    position: relative;
}

.fa-paper-plane{
    position: absolute;
    top: 0;
    left: 50%;
    transform: translate(-50%, -50%);
    background: #fff;
    font-size: 26px;
    padding: 20px;
    border-radius: 50%;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}

.input-group{
    width: 100%;
    display: flex;
    align-items: center;
    margin: 10px 0;
    position: relative;
}

.input-group label{
    flex-basis: 28%;
}

.input-group input, .input-group textarea{
    flex-basis: 68%;
    background: transparent;
    border: 0;
    outline: 0;
    padding: 10px 0;
    border-bottom: 1px solid #999;
    color: #333;
    font-size: 16px;
}

::placeholder{
    font-size: 14px;
}

form button{
    background: #141a34;
    color: #fff;
    border-radius: 4px;
    border: 1px solid rgba(255, 255, 255, 0.7);
    padding: 10px 40px;
    outline: 0;
    cursor: pointer;
    display: block;
    margin: 30px auto 10px;
}

.input-group span{
    position: absolute;
    bottom: 12px;
    right: 17px;
    font-size: 14px;
    color: red;

}

#subit-error{
    color: red;
}

.input-group span{
    color: seagreen;
}

#submit{
    text-decoration: none;
    color: white;
}

.gatau{
    width: 300px;
    height: 200px;
    background-color: white;
    box-shadow: 0 0 0 5px rgba(0, 0, 0, 0.5);
    border-radius: 10px;
    position: relative;
    left: 100px;
}

</style>
    <header>
        <input type="checkbox" name="" id="chk1">
        <div class="logo"><h1>Pero</h1></div>
        <div class="search-box">
            <form action="">
                <input type="text" name="search" id="srch" placeholder="Search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <ul>  
            <li><a href="index.php?modul=home">Home</a></li>
            <li><a href="index.php?modul=product">Product</a></li>
            <li><a href="index.php?modul=blog">Blog</a></li>
            <li><a href="index.php?modul=contact">Contact</a></li>
            <li>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </li>
        </ul>
        <div class="menu">
            <label for="chk1">
                <i class="fa fa-bars"></i>
            </label>
        </div>
      
        
    </header>

    <div id="tengah">
    <div id="test" style=" border: px solid;
    width: 100%; position:relative; top:100px; padding-bottom:100px;">
 
<div class="main-content">
<?php 
    if(isset($_GET['modul'])){
        $pages = $_GET['modul'];
    } else {
        $pages = "home";
           
        }
      
        if(!isset($_GET['modul']) || $pages == "home"){
            ?>
            <div id="content-home">
                <h1>Home</h1><br>
                    <p>Manusia tadi makan ayam.<br>
                    di indonesia saat merdeka<br>
                    ayam mencari kuliah agar semangat<br>
                    tiba tiba datang semut menari<br></p>
                  
                 
        </div>
        
        <?php
            }
            if($pages == "product"){
            ?>
            <div id="content-product">
                <h1>Product</h1><br>
                <p>Manusia tadi makan ayam.<br>
                    di indonesia saat merdeka<br>
                    ayam mencari kuliah agar semangat<br>
                    tiba tiba datang semut menari<br></p>
                    <a href="NavbarTransparent.php?modul=produk1me">Produk 1</a>
                    <a href="NavbarTransparent.php?modul=produk2me">Produk 2</a>
                    <a href="NavbarTransparent.php?modul=produk3me">Produk 3</a>
            </div>
            <?php 
            }
            if($pages == "produk1me"){

                ?>
            
            <div id="content-produk">
            <h1 style="color:blue;">Produk olahraga</h1><br>
                <p>tolong bang beli produk saya kulkas hp dan lain lain<br>
                <a href="NavbarTransparent.php?modul=product">kembali</a>
            </div>

            <?php 
            }
            if($pages == "produk2me"){

                ?>
            
            <div id="content-produk">
            <h1 style="color:blue;">Produk elektronik</h1><br>
                <p>tolong bang beli produk saya kulkas hp dan lain lain<br>
                <a href="NavbarTransparent.php?modul=product">kembali</a>
            </div>

            <?php 
            }
            if($pages == "produk3me"){

                ?>
            
            <div id="content-produk">
            <h1 style="color:blue;">Produk furniture</h1><br>
                <p>tolong bang beli produk saya kulkas hp dan lain lain<br>
                <a href="NavbarTransparent.php?modul=product">kembali</a>
            </div>

            
             <?php
            }
            if($pages == "blog"){
            ?>
            <div id="content-blog">
                <h1>Blog</h1><br>
                <p>Manusia tadi makan ayam.<br>
                    di indonesia saat merdeka<br>
                    ayam mencari kuliah agar semangat<br>
                    tiba tiba datang semut menari<br></p>
            </div>
            <?php
            }
            if($pages == "contact"){
            ?>
            <div id="content-contact">
          
<body style="color: black ; background-color: #1d2630;">

    <div class="container mt-5">
        <div class="text-center">
            <h1 class="display-5 mb-5"><strong style="color:black;">CRUD Application</strong></h1>
        </div>
        <div class="main row justify-content-center">
            <form action="" id="student-form" class="row justify-content-center mb-4" autocomplete="off">
                <div class="col-10 col-md-8 mb-3">
                    <label for="firstName" style="color:black;">First Name</label>
                    <input class="form-control" id="firstName" type="text" placeholder="Enter First Name" name="contact-firstName" onkeyup="validatefirstName()"> <span id="name-error"></span>
                </div>


                <div class="col-10 col-md-8 mb-3">
                    <label for="lastName" style="color:black;">Last Name</label>
                    <input class="form-control" id="lastName" type="text" placeholder="Enter Last Name" name="contact-lastName" onkeyup="validatelastName()"> <span id="names-error"></span>
                </div>


                <div class="col-10 col-md-8 mb-3">
                    <label for="rollno" style="color:black;">Roll No</label>
                    <input class="form-control" id="rollNo" type="text" placeholder="Enter Roll No" name="contact-rollNo" onkeyup="validaterollNo()"> <span id="rollNo-error"></span>
                </div>
                <div class="col-10 col-md-8">
                   <input class="btn btn-success add-btn" type="submit" value="Submit" name="submit">
                </div>
            </form>
            <div class="col-12 col-md-10 mt-5">
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Roll No</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="student-list">
                        <tr>
                            <td>Dear</td>
                            <td>Programmer</td>
                            <td>25</td>
                            <td>
                                <a href="#" class="btn btn-warning btn-sm edit">Edit</a>
                                <a href="#" class="btn btn-danger btn-sm delete">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>


// validasi firstname
function validatefirstName() {
    var name = document.getElementById('firstName').value;
    var nameError = document.getElementById('name-error');

    if (name.length < 12) {
        nameError.innerHTML = 'minimal harus ada 12 karakter';
        return false;
    } else { 
        nameError.innerHTML = ''; // membersihkan error jika benar
        nameError.innerHTML = '<i class="far fa-check-circle"></i>  '; 
        return true;
    }
}
   

// validasi lastname
function validatelastName() {
    var name = document.getElementById('lastName').value;
    var nameError = document.getElementById('names-error');

    if (name.length < 12) {
        nameError.innerHTML = 'minimal harus ada 12 karakter';
        return false;
    } else { 
        nameError.innerHTML = '';  // membersihkan error jika benar
        nameError.innerHTML = '<i class="fas fa-check-circle"></i>'; 
        return true;
    }
}

//validasi tidak penggaris
function validaterollNo() {
    var rollNo = document.getElementById('rollNo').value;
    var rollNoError = document.getElementById('rollNo-error');

    // Validasi jika rollNo bukan angka atau panjangnya kurang dari 6 karakter
    if (isNaN(rollNo) || rollNo.length < 6) {
        rollNoError.innerHTML = 'harus terdiri dari minimal 6 angka';
        return false;
    } else { 
        rollNoError.innerHTML = ''; // Hapus pesan kesalahan jika valid
        rollNoError.innerHTML = '<i class="fas fa-check-circle"></i>'; // Tambahkan ikon centang
        return true;
    }
}

   
  var selectedRow = null;

//show alerts
function showAlert(message, className){
    const div = document.createElement("div");
    div.className = `alert alert-${className}`; // au ah mau makan truk
    
    div.appendChild(document.createTextNode(message));
    const container = document.querySelector(".container");
    const main = document.querySelector(".main");
    container.insertBefore(div, main);

    setTimeout(() => document.querySelector(".alert").remove(),  3000);
}


//clear all fields
function clearFields(){
    document.querySelector("#firstName").value = "";
    document.querySelector("#lastName").value = "";
    document.querySelector("#rollNo").value = "";
}

// add data

document.querySelector("#student-form").addEventListener("submit", (e) =>{
    e.preventDefault();

    //Get Form Values
    const firstName = document.querySelector("#firstName").value;
    const lastName = document.querySelector("#lastName").value;
    const rollNo = document.querySelector("#rollNo").value;

    //validate
    if(firstName == "" || lastName == "" || rollNo == ""){
        showAlert("Silakan isi semua kolom", "danger");
    }
    else{
        if(selectedRow == null){
            const list = document.querySelector("#student-list");
            const row = document.createElement("tr");

            row.innerHTML = `
            <td>${firstName}</td>
            <td>${lastName}</td>
            <td>${rollNo}</td>
            <td>
            <a href="#" class="btn btn-warning btn-sm edit">Edit</a>
            <a href="#" class="btn btn-danger btn-sm delete">Delete</a>
            `;
            list.appendChild(row);
            selectedRow = null;
            showAlert("Student Added", "success");
        }
        else{
            selectedRow.children[0].textContent = firstName;
            selectedRow.children[1].textContent = lastName;
            selectedRow.children[2].textContent = rollNo;
            selectedRow = null;
            showAlert("Student Info Edited", "info");
        }

        clearFields();
    }
});

//Edit Data

document.querySelector("#student-list").addEventListener("click", (e) =>{
    target = e.target;
    if(target.classList.contains("edit")){
        selectedRow = target.parentElement.parentElement;
        document.querySelector("#firstName").value = selectedRow.children[0].textContent;
        document.querySelector("#lastName").value = selectedRow.children[1].textContent;
        document.querySelector("#rollNo").value = selectedRow.children[2].textContent;

    }
});


//delete data
document.querySelector("#student-list").addEventListener("click", (e) =>{
    target = e.target;
    if(target.classList.contains("delete")){
        target.parentElement.parentElement.remove();
        showAlert("Student Data Deleted", "danger");
    }
});
        </script>

</body>
</html>

            </div>
            
        <?php 
            }
            if($pages == "aboutme"){

                ?>
            
            <div id="content-about">
            <h1 style="color:blue;">Tentang Saya</h1><br>
                <p>Saya adalah manusia.<br>
                    di indonesia saat merdeka<br>
                    ayam mencari kuliah agar semangat<br>
                    tiba tiba datang semut menari<br></p>
            </div>

            <?php 
            }
            ?>

        
        

   </div>
</div>
   
</div>
 
</body>
</html>