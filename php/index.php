<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='UTF-8' />
    <meta http-equiv='X-UA-Compatible' content='IE=edge' />
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />
    <title>Home</title>
    <link
      rel='stylesheet'
      href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'
      integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh'
      crossorigin='anonymous'
    />
    <link rel='preconnect' href='https://fonts.googleapis.com' />
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin />
    <link
      href='https://fonts.googleapis.com/css2?family=Roboto&display=swap'
      rel='stylesheet'
    />
    <link rel='stylesheet' href='../css/index.css' />
    <link rel='icon' href='../images/logo2.png' />
    <!--Jquery scripts-->
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  </head>
  <body>
    <!--header section starts-->
    <header class='container-fluid sticky-top p-0' style='height: 0;'>
      <div class='shadow custom-css-div-inner-header bg-white'>
        <nav class='navbar justify-content-center flex-column'>
          <div class='navbar-header'>
            <img
              class='navbar-brand custom-css-logo mr-0'
              src='../images/logo.png'
              alt=''
            />
          </div>
          <div class='nav'>
            <ul class='list-unstyled d-flex'>
              <li class='nav-item pl-3'>
                <a class='nav-link' href=''>ABOUT</a>
              </li>
              <li class='nav-item pl-3'>
                <a class='nav-link' href=''>HOME</a>
              </li>
              <li class='nav-item pl-3'>
                <a class='nav-link' href=''>CONTACT</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      <div class='bg-white'>
        <button class='position-fixed border-0 bg-transparent mt-3 ml-3 custom-css-hamburger-wrapper' type='menu' >
          <img class='custom-css-hamburger bg-white rounded-circle position-fixed'  src='../images/menu.png' alt=''>
        </button>
        <button class='position-fixed border-0 bg-transparent mt-3 ml-3 custom-css-close-wrapper'>
          <img class='custom-css-close' src='../images/close.png' alt=''>
        </button>
      </div>
      
      <div class='custom-css-sidebar  '>
        
       <div class='custom-css-sidebar-inner align-middle'>
        <form
        class=' ml-4 custom-css-search-form'
        action='#'
        method='get'
        name='searchForm'
      >
        <div class='form-group custom-css-search-form-group' id='searchForm'>
          <input
            class='rounded'
            type='text'
            name='searchQuery'
            id='searchQuery'
            placeholder='Search'
          />
          <div class='custome-css-searchButtonWrapper d-inline'>
            <input
              class='align-middle'
              src='../images/search-solid.svg'
              type='image'
              name='searchButton'
              id='searchButton'
            />
          </div>
        </div>
      </form>
      <form
        class='mt-5 ml-4 custom-css-customize-form'
        action='#'
        method='get'
        name='customizeForm'
      >
        <div class='form-group'>
          <h5>Category</h5>
          <div>
            <label for='AI'>Artificial Intelligence</label>
            <input
              type='radio'
              name='Category'
              id='AI'
              value='Artificial Intelligence'
            />
          </div>
          <div>
            <label for='DS'>Data Science</label>
            <input
              type='radio'
              name='Category'
              id='DS'
              value='Data Science'
            />
          </div>
          <div>
            <label for='CSec'>Cyber Security</label>
            <input
              type='radio'
              name='Category'
              id='CSec'
              value='Cyber Security'
            />
          </div>
          <div>
            <label for='CS'>Computer Science</label>
            <input
              type='radio'
              name='Category'
              id='CS'
              value='Computer Science'
            />
          </div>
          <div>
            <label for='BD'>Big Data</label>
            <input type='radio' name='Category' id='BD' value='Big Data' />
          </div>
          <div>
            <label for='ML'>Machine Learning</label>
            <input
              type='radio'
              name='Category'
              id='ML'
              value='Machine Learning'
            />
          </div>
          <div>
            <label for='All'>All</label>
            <input type='radio' name='Category' id='All' value='All' />
          </div>
        </div>
        <div class='form-group'>
          <h5>Length</h5>
          <div>
            <label for='2000p'>2000+</label>
            <input type='radio' name='length' id='2000p' value='2000p' />
          </div>
          <div>
            <label for='1000t2'>1000-2000</label>
            <input type='radio' name='length' id='1000t2' value='1000t2' />
          </div>
          <div>
            <label for='1000l'>&lt;1000 </label>
            <input type='radio' name='length' id='1000l' value='1000l' />
          </div>
          <div>
            <label for='Any'>Any</label>
            <input type='radio' name='length' id='Any' value='Any' />
          </div>
        <div class='mr-4 custom-css-submit-button-wrapper'>
          <input type='submit' value='Apply' />
        </div>
      </form>
       </div>
      </div>
    </header>
    
    <!--header ends-->
    <!--side bar and post priview section starts-->
    <section class='container-fluid float-right custom-css-post-preview-section '>
      <?php
      $i=0;
         for($i=0;$i<3;++$i){
            echo"<article class='row flex-column'>
            <img class='col-lg-7 img-fluid' src='../images/artificial-intelligence-g843fc2dd2_1920.jpg' alt=''>
            <span class='d-block col-lg-1 '><i>Published by admin on 05/08/2004</i></span>
            <p class='col-lg-3'>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt, quasi at quos quaerat soluta accusamus vel a ut, minima vero qui architecto adipisci voluptatum laboriosam, illo suscipit autem impedit reprehenderit quisquam corrupti velit iste. Quam itaque expedita debitis numquam ut vero labore, illo aut aperiam deserunt sit voluptate temporibus voluptatibus.</p>
            <a class='col-lg-1' href='#'>Read More</a>
          </article>";
         }
      ?>
    </section>
    <!--bootstrap scripts-->
   
    <script
      src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'
      integrity='sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo'
      crossorigin='anonymous'
    ></script>
    <script
      src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js'
      integrity='sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6'
      crossorigin='anonymous'
    ></script>
    <script src='../javascript/index.js'></script>
    <!--fontawesome scripts-->
    <script src='https://use.fontawesome.com/77508ec597.js'></script>
  </body>
</html>
