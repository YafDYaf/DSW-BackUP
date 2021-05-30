<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Bophelo Solutions - Let Help Us Help You</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.html">Bophelo Solutions - Let Help Us Help You</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                            <li class="nav-item"><a class="nav-link" href="login.html">Register/Sign In</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownBlog" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                                    <li><a class="dropdown-item" href="onlinewill.html">Online Will</a></li>
                                    <li><a class="dropdown-item" href="deathcertificate.html">Death Certificate Application</a></li>
                                    <li><a class="dropdown-item" href="funeralcover.html">Funeral Cover Payout</a></li>
                                    <li><a class="dropdown-item" href="deathcertificate.html">Credit Profile</a></li>
                                </ul>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Pricing section-->
            <section class="bg-light py-5">
                <div class="container px-5 my-5">
                    <div class="text-center mb-5">
                        <h1 class="fw-bolder">Bophelo Solutions</h1>
                        <p class="lead fw-normal text-muted mb-0">Login</p>
                    </div>
     <div class="main-register">

    <div class="main-register">

    </div>
      <form action= "connection1.php" method="post" >
      <div class="registerinfo">
          <h1>Contact Information</h1>
          <p>Please fill in the form with the relevant contact details.</p>
          <hr>
          <br>

          <label for="firstname"><b>First Name</b></label> <!-- so with this one i was thinking because when you sign up with your name and surname, this field and the last name are already filled in .-->
          <br><br>
          <input type="text" placeholder="Enter First Name" name="name" id="firstname" required> <!-- so with this one i was thinking because when you sign up with your name and surname, this field and the last name are already filled in .-->
          <br><br>
          <label for="lastname"><b>Last Name</b></label>
          <br><br>
          <input type="text" placeholder="Enter Last Name" name="lastname" id="lastname" required>
          <br><br>
          <label for="allgender"><b>Gender</b></label><br><br>
          <input type ="radio" name ="m" value ="male"> Male<br>
          <input type ="radio" name ="f" value ="female"> Female<br>
          <input type ="radio" name ="o" value ="other"> Other<br>
          <br><br>

          <label for="dob"><b>Date of Birth</b></label><br><br>

          <select name="days">
              <option value ="days"> Days </option>
              <option value ="1"> 1 </option>
              <option value ="2"> 2 </option>
              <option value ="3"> 3 </option>
              <option value ="4"> 4 </option>
              <option value ="5"> 5 </option>
              <option value ="6"> 6 </option>
              <option value ="7"> 7 </option>
              <option value ="8"> 8 </option>
              <option value ="9"> 9 </option>
              <option value ="10"> 10 </option>
              <option value ="11"> 11 </option>
              <option value ="12"> 12 </option>
              <option value ="13"> 13 </option>
              <option value ="14"> 14 </option>
              <option value ="15"> 15 </option>
              <option value ="16"> 16 </option>
              <option value ="17"> 17 </option>
              <option value ="18"> 18 </option>
              <option value ="19"> 19 </option>
              <option value ="20"> 20 </option>
              <option value ="21"> 21 </option>
              <option value ="22"> 22 </option>
              <option value ="23"> 23 </option>
              <option value ="24"> 24 </option>
              <option value ="25"> 25 </option>
              <option value ="26"> 26 </option>
              <option value ="27"> 27 </option>
              <option value ="28"> 28 </option>
              <option value ="29"> 29 </option>
              <option value ="30"> 30 </option>
              <option value ="31"> 31 </option>
          </select>
          <select name="month">
              <option value ="month"> Month </option>
              <option value ="jan"> January </option>
              <option value ="feb"> February </option>
              <option value ="mar"> March </option>
              <option value ="apr"> April </option>
              <option value ="may"> May </option>
              <option value ="jun"> June </option>
              <option value ="jul"> July </option>
              <option value ="aug"> August </option>
              <option value ="sept"> September </option>
              <option value ="oct"> October </option>
              <option value ="nov"> November </option>
              <option value ="dec"> December </option>
          </select>
          <select name="years">
              <option value ="years"> Years</option>
              <option value ="1900"> 1900 </option>
              <option value ="1901"> 1901 </option>
              <option value ="1902"> 1902 </option>
              <option value ="1903"> 1903 </option>
              <option value ="1904"> 1904 </option>
              <option value ="1905"> 1905 </option>
              <option value ="1906"> 1906 </option>
              <option value ="1907"> 1907 </option>
              <option value ="1908"> 1908 </option>
              <option value ="1909"> 1909 </option>
              <option value ="1910"> 1910 </option>
              <option value ="1911"> 1911 </option>
              <option value ="1912"> 1912 </option>
              <option value ="1913"> 1913 </option>
              <option value ="1914"> 1914 </option>
              <option value ="1915"> 1915 </option>
              <option value ="1916"> 1916 </option>
              <option value ="1917"> 1917 </option>
              <option value ="1918"> 1918 </option>
              <option value ="1919"> 1919 </option>
              <option value ="1920"> 1920 </option>
              <option value ="1921"> 1921 </option>
              <option value ="1922"> 1922 </option>
              <option value ="1923"> 1923 </option>
              <option value ="1924"> 1924 </option>
              <option value ="1925"> 1925 </option>
              <option value ="1926"> 1926 </option>
              <option value ="1927"> 1927 </option>
              <option value ="1928"> 1928 </option>
              <option value ="1929"> 1929 </option>
              <option value ="1930"> 1930 </option>
              <option value ="1931"> 1931 </option>
              <option value ="1932"> 1932 </option>
              <option value ="1933"> 1933 </option>
              <option value ="1934"> 1934 </option>
              <option value ="1935"> 1935 </option>
              <option value ="1936"> 1936 </option>
              <option value ="1937"> 1937 </option>
              <option value ="1938"> 1938 </option>
              <option value ="1938"> 1938 </option>
              <option value ="1939"> 1939 </option>
              <option value ="1940"> 1940 </option>
              <option value ="1941"> 1941 </option>
              <option value ="1942"> 1942 </option>
              <option value ="1943"> 1943 </option>
              <option value ="1944"> 1944 </option>
              <option value ="1945"> 1945 </option>
              <option value ="1946"> 1946 </option>
              <option value ="1947"> 1947 </option>
              <option value ="1948"> 1948 </option>
              <option value ="1949"> 1949 </option>
              <option value ="1950"> 1950 </option>
              <option value ="1950"> 1951 </option>
              <option value ="1951"> 1951 </option>
              <option value ="1952"> 1952 </option>
              <option value ="1953"> 1953 </option>
              <option value ="1954"> 1954 </option>
              <option value ="1955"> 1955 </option>
              <option value ="1956"> 1956 </option>
              <option value ="1957"> 1957 </option>
              <option value ="1958"> 1958 </option>
              <option value ="1959"> 1959 </option>
              <option value ="1960"> 1960 </option>
              <option value ="1961"> 1961 </option>
              <option value ="1962"> 1962 </option>
              <option value ="1963"> 1963 </option>
              <option value ="1964"> 1964 </option>
              <option value ="1965"> 1965 </option>
              <option value ="1966"> 1966 </option>
              <option value ="1967"> 1967 </option>
              <option value ="1968"> 1968 </option>
              <option value ="1969"> 1969 </option>
              <option value ="1970"> 1970 </option>
              <option value ="1971"> 1971 </option>
              <option value ="1972"> 1972 </option>
              <option value ="1973"> 1973 </option>
              <option value ="1974"> 1974 </option>
              <option value ="1975"> 1975 </option>
              <option value ="1976"> 1976 </option>
              <option value ="1977"> 1977 </option>
              <option value ="1978"> 1978 </option>
              <option value ="1979"> 1979 </option>
              <option value ="1980"> 1980 </option>
              <option value ="1981"> 1981 </option>
              <option value ="1982"> 1982 </option>
              <option value ="1983"> 1983 </option>
              <option value ="1984"> 1984 </option>
              <option value ="1985"> 1985 </option>
              <option value ="1986"> 1986 </option>
              <option value ="1987"> 1987 </option>
              <option value ="1988"> 1988 </option>
              <option value ="1989"> 1989 </option>
              <option value ="1990"> 1990 </option>
              <option value ="1991"> 1991 </option>
              <option value ="1992"> 1992 </option>
              <option value ="1993"> 1993 </option>
              <option value ="1994"> 1994 </option>
              <option value ="1995"> 1995 </option>
              <option value ="1996"> 1996 </option>
              <option value ="1997"> 1997 </option>
              <option value ="1998"> 1998 </option>
              <option value ="1999"> 1999 </option>
              <option value ="2000"> 2000 </option>
              <option value ="2001"> 2001 </option>
              <option value ="2002"> 2002 </option>
              <option value ="2003"> 2003 </option>
              <option value ="2004"> 2004 </option>
              <option value ="2005"> 2005 </option>
              <option value ="2006"> 2006 </option>
              <option value ="2007"> 2007 </option>
              <option value ="2008"> 2008 </option>
              <option value ="2009"> 2009 </option>
              <option value ="2010"> 2010 </option>
              <option value ="2011"> 2011 </option>
              <option value ="2012"> 2012 </option>
              <option value ="2013"> 2013 </option>
              <option value ="2014"> 2014 </option>
              <option value ="2015"> 2015 </option>
              <option value ="2016"> 2016 </option>
              <option value ="2017"> 2017 </option>
              <option value ="2018"> 2018 </option>
              <option value ="2019"> 2019 </option>
              <option value ="2020"> 2020 </option>
          </select>
          <br><br>
          <label for="address"><b>Address</b></label><br><br>
          <select name="province">
              <option value ="province"> Province</option>
              <option value ="wcprovince"> Western Cape</option>
              <option value ="kznprovince"> KwaZulu-Natal</option>
              <option value ="fsprovince"> Free State Province</option>
              <option value ="gprovince"> Gauteng</option>
              <option value ="npprovince"> Northern</option>
              <option value ="ecprovince"> Eastern Cape</option>
              <option value ="mprovince"> Mpumalanga</option>
              <option value ="lprovince"> Limpopo</option>
              <option value ="nwprovince"> North West</option>
          </select>
          <br><br>
          <input type="text" placeholder="City" name="city" id="city" required>
          <input type="text" placeholder="Street Address" name="streetaddress" id="address" required>
          <input type="text" placeholder="Zip Code" name="zipcode" id="zipcode" required>
          <br><br>
          <label for ="phonenumber"><b>Phone Number</b></label>
          <br><br>
          <input type="text" placeholder="Enter Phone Number" name="phonenumber" id="phonenumber" required> <!-- so with this one i was thinking because when you sign up with your name and surname, this field and the last name are already filled in .-->
          <br><br>
          <label for ="idnumber"><b>ID Number</b></label>
          <br><br>
          <input type="text" placeholder="Enter ID Number" name="idnumber" id="idnumber" required> <!-- so with this one i was thinking because when you sign up with your name and surname, this field and the last name are already filled in .-->
          <br><br>
          <button type="submit" name="submit">Submit</button>
          <br>
        <!-- Footer-->
        <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; Your Website 2021</div></div>
                    <div class="col-auto">
                        <a class="link-light small" href="#!">Privacy</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Terms</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Contact</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
