    document.addEventListener('DOMContentLoaded', function() {
        
        
        
        // right click functionality 
        //Right Click Functionality
       const appDiv = document.getElementById("filemanagerapplist");
       
          // Add a click event listener directly to the checkbox as well
          const checkbox = appDiv.querySelector('input[type="checkbox"]');
          if (checkbox) {
              checkbox.addEventListener('click', (event) => {
                  // Prevent the click from also triggering the parent appDiv's event
                  event.stopPropagation(); 
              });
          }
        
        const appContextMenu = document.getElementById("app-contextmenu");
          const dashboardContextMenu = document.getElementById("context-menu");
          const dashboard = document.querySelector(".mainrightscreen");
          const appDivs = appDiv.querySelectorAll(".maindesktopapp");
          const arrowIcons = appDiv.querySelectorAll(".app-tools i");

          // Function to position a menu and make it visible
        // Function to position and show a menu
        function positionAndShowMenu(menu, event) {
          menu.style.display = "block";
          menu.style.visibility = "hidden";

          // Calculate positions and available space
          const menuRect = menu.getBoundingClientRect();
          const viewportWidth = window.innerWidth;
          const viewportHeight = window.innerHeight;

          // Initial positioning: Prioritize placing the menu to the right
          let top = event.clientY;
          let left = event.clientX;

          // Check if there's enough space on the right, accounting for a small margin
          if (left + menuRect.width + 10 < viewportWidth) {
            // If so, place it on the right
          } else {
            // If not enough space on the right, place it on the left
            left -= menuRect.width;
          }
          

          // Adjust if overflowing at the top
          if (top + menuRect.height > viewportHeight) {
            // Try placing above first
            top = event.clientY - menuRect.height;
            if (top < 0) {
              // If still overflowing, adjust to fit below
              top = Math.max(0, viewportHeight - menuRect.height);
            }
          }

          // Ensure the menu is within the screen
          top = Math.max(0, top);
          left = Math.max(0, left);

          menu.style.top = `${top}px`;
          menu.style.left = `${left}px`;

          // Recursive positioning for submenus (using the updated logic)
          menu.style.visibility = "visible"; // Make the menu visible
          menu.classList.remove("hidden");
          menu.style.display = "block";
        }
      

          // Right-click on App Div to show App Context Menu
             $('#filemanagersection').on('contextmenu', '.maindesktopapp', function(event){
                  event.preventDefault();
                  dashboardContextMenu.classList.add("hidden");
                  // Ensure dashboard menu is hidden
                  let selectapp = $(this).find('.selectapp');
                  $('#desktopapps .maindesktopapp .selectapp').removeClass("selectedfile");

                  selectapp.addClass('selectedfile')
                //   var targetElement = closestParent.find('.openiframe');
                  let classList = event.target.classList;
                  console.log(selectapp);
                    if (!selectapp.hasClass('showappoptions')) {
                        $(".allappoptions").removeClass("hidden");
                        
                    }else{
                        $(".allappoptions").addClass("hidden");
                        $(".appoptions").removeClass("hidden");
                            
                    }
                    console.log(selectapp);
                  positionAndShowMenu(appContextMenu, event, dashboard);
                });
              

        
            $('#filemanagersection').on('click', '.maindesktopapp .app-tools i', function(event){
                    event.stopPropagation();
                    let classList = event.target.classList;
                    dashboardContextMenu.classList.add("hidden"); // Ensure dashboard menu is hidden
                    let selectapp = $(this).find('.openiframe');
                    $('#desktopapps .selectapp').removeClass("selectedfile");
                      selectapp.addClass('selectedfile')
                    if (!selectapp.hasClass('showappoptions')) {
                        $(".allappoptions").removeClass("hidden");
                    }else{
                        $(".allappoptions").addClass("hidden");
                        $(".appoptions").removeClass("hidden");
                    }
                    console.log(selectapp);
                    positionAndShowMenu(appContextMenu, event, dashboard);
            
            });
            
          // Right-click on Dashboard (not on App Div) to show Dashboard Context Menu
          dashboard.addEventListener("contextmenu", (event) => {
            const target = event.target;
            if (!target.classList.contains('app') && !target.closest('.app')) {
              event.preventDefault();
              appContextMenu.classList.add("hidden"); // Ensure app menu is hidden
              positionAndShowMenu(dashboardContextMenu, event, dashboard);
            }
          });

            // Show submenu on hover
        document.querySelectorAll(".context-menu li").forEach((item) => {
          item.addEventListener("mouseenter", function () {
            
            const submenu = this.querySelector(".submenu");
            console.log(submenu);
            if (submenu) {
              submenu.classList.remove("hidden");
              submenu.style.display = "block";

           // Adjust submenu position
              const submenuRect = submenu.getBoundingClientRect();
              const screenWidth = window.innerWidth;
              const screenHeight = window.innerHeight;

              // Handle right overflow
              if (submenuRect.right > screenWidth) {
                submenu.style.left = `-${submenuRect.width}px`;
              }

              // Handle left overflow
              if (submenuRect.left < 50) {
                submenu.style.left = `${this.offsetWidth}px`;
              }

              // Handle bottom overflow
              if (submenuRect.bottom > screenHeight) {
                submenu.style.top = `-${submenuRect.height - this.offsetHeight}px`;
              }

              // Handle top overflow
              if (submenuRect.top < 0) {
                submenu.style.top = `${this.offsetHeight}px`;
              }
            }
          });

          item.addEventListener("mouseleave", function () {
            const submenu = this.querySelector(".submenu");
            if (submenu) {
              submenu.classList.add("hidden");
              submenu.style.display = "none";
            }
          });
        });

       

        // Left-click on Arrow Icon to show App Context Menu
        arrowIcons.forEach((icon) => {
          icon.addEventListener("click", (event) => {
            event.stopPropagation();
            dashboardContextMenu.classList.add("hidden"); // Ensure dashboard menu is hidden
            dashboardContextMenu.style.display = "none";
            positionAndShowMenu(appContextMenu, event);
          });
        });

        // Right-click on Dashboard (not on App Div) to show Dashboard Context Menu
        dashboard.addEventListener("contextmenu", (event) => {
          const target = event.target;
          if (!target.classList.contains("app") && !target.closest(".app")) {
            event.preventDefault();
            appContextMenu.classList.add("hidden"); // Ensure app menu is hidden
            appContextMenu.style.display = "none";
            positionAndShowMenu(dashboardContextMenu, event);
          }
        });

        // Click anywhere to hide menus
        document.addEventListener("click", (event) => {
          if (
            !event.target.closest("#app-contextmenu") &&
            !event.target.closest("#context-menu")
          ) {
            appContextMenu.classList.add("hidden");
            dashboardContextMenu.classList.add("hidden");
            appContextMenu.style.display = "none";
            dashboardContextMenu.style.display = "none";
          }
        });
        
        
        
        
        
        
    });