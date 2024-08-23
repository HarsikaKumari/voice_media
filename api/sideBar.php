 <style>
     .menu-toggle {
         font-size: 24px;
         background: none;
         border: none;
         cursor: pointer;
         /* position: fixed; */
         top: 30px;
         left: 10px;
         z-index: 1000;
     }

     .popup-menu {
         display: none;
         position: fixed;
         top: 50px;
         left: 10px;
         background-color: #003366;
         border-radius: 5px;
         box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
         z-index: 999;
     }

     .popup-menu.active {
         display: block;
     }

     .popup-menu ul {
         list-style-type: none;
         padding: 0;
         margin: 0;
     }

     .popup-menu li {
         padding: 10px 20px;
         border-bottom: 1px solid #004488;
     }

     .popup-menu li:last-child {
         border-bottom: none;
     }

     .popup-menu a {
         color: white;
         text-decoration: none;
         display: block;
     }

     .popup-menu a:hover {
         background-color: #004488;
     }
 </style>
 <button class="menu-toggle" id="menuToggle">☰</button>

 <nav class="popup-menu" id="popupMenu">
     <ul>
         <li><a href="#community">Community</a></li>
         <li><a href="#cry-out">Cry Out</a></li>
         <li><a href="#certificate">Certificate</a></li>
         <li><a href="#mementoes">Mementoes</a></li>
         <li><a href="#donations">Donations</a></li>
         <li><a href="#bible-gateway">BibleGateway</a></li>
         <li><a href="#join-us">Join Us</a></li>
     </ul>
 </nav>

 <script>
     document.getElementById('menuToggle').addEventListener('click', function(event) {
         event.stopPropagation();
         document.getElementById('popupMenu').classList.toggle('active');
     });

     document.addEventListener('click', function(event) {
         var menu = document.getElementById('popupMenu');
         if (!menu.contains(event.target) && !event.target.matches('.menu-toggle')) {
             menu.classList.remove('active');
         }
     });
 </script>