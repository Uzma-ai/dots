

  //Clock start Functionality
  function updateClock() {
    const clock = document.getElementById("clock");
    const now = new Date();

    const hours = String(now.getHours()).padStart(2, "0");
    const minutes = String(now.getMinutes()).padStart(2, "0");

    const days = [
      "Sunday",
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday",
    ];
    const months = [
      "January",
      "February",
      "March",
      "April",
      "May",
      "June",
      "July",
      "August",
      "September",
      "October",
      "November",
      "December",
    ];
    const day = days[now.getDay()];
    const month = months[now.getMonth()];
    const date = now.getDate();

    const timeString = `${hours}:${minutes}`;
    const dateString = `${day}, ${month} ${date}`;

    clock.innerHTML = `<div class="time text-c-white text-5xl font-normal">${timeString}</div><div class="date text-sm flex font-normal">${dateString}</div>`;
  }

  updateClock();
  setInterval(updateClock, 60000);

   //Notification container Functionality
  document
    .getElementById("notification-icon")
    .addEventListener("click", function () {
      const notificationDiv = document.getElementById("notification");
      notificationDiv.classList.toggle("hidden");
    });

  //Search Contiainer Functionality
  document
    .getElementById("search-icon")
    .addEventListener("click", function () {
      const searchDiv = document.getElementById("search");
      searchDiv.classList.toggle("hidden");
    });
  const searchInput = document.getElementById("searchInput");
  const suggestions = document.getElementById("suggestions");
  const Search = document.querySelector(".Search")

  searchInput.addEventListener("input", function () {
  if (searchInput.value.length > 0) {
    suggestions.classList.remove("hidden");
    Search.classList.add("open");
  } else {
    suggestions.classList.add("hidden");
    Search.classList.remove("open");
  }
});

  document
    .querySelector(".cross-icon")
    .addEventListener("click", function () {
      searchInput.value = "";
      suggestions.classList.add("hidden");
      Search.classList.remove("open");
      document.getElementById("search").classList.add("hidden");
    });

   //Administrator Container Functionality
  document
    .getElementById("footer-logo")
    .addEventListener("click", function () {
      const administratorDiv = document.getElementById("administrator");
      administratorDiv.classList.toggle("hidden");
    });

  // draggble clock functionality
dragElement(document.getElementById("clock"));

function dragElement(element) {
  let pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
  element.onmousedown = dragMouseDown;

  function dragMouseDown(e) {
    e = e || window.event;
    e.preventDefault();
    // get the mouse cursor position at startup:
    pos3 = e.clientX;
    pos4 = e.clientY;
    document.onmouseup = closeDragElement;
    // call a function whenever the cursor moves:
    document.onmousemove = elementDrag;
  }

  function elementDrag(e) {
    e = e || window.event;
    e.preventDefault();
    // calculate the new cursor position:
    pos1 = pos3 - e.clientX;
    pos2 = pos4 - e.clientY;
    pos3 = e.clientX;
    pos4 = e.clientY;

    // set the element's new position:
    const newTop = element.offsetTop - pos2;
    const newLeft = element.offsetLeft - pos1;

    // prevent the element from being dragged out of the screen
    const minTop = 0;
    const maxTop = window.innerHeight - element.offsetHeight;
    const minLeft = 0;
    const maxLeft = window.innerWidth - element.offsetWidth;

    element.style.top = Math.min(Math.max(newTop, minTop), maxTop) + "px";
    element.style.left = Math.min(Math.max(newLeft, minLeft), maxLeft) + "px";
  }

  function closeDragElement() {
    // stop moving when mouse button is released:
    document.onmouseup = null;
    document.onmousemove = null;
  }
}
/// clock code end

/// notification , search code 
  //functionality of hidden container when outside click

  document.addEventListener("DOMContentLoaded", function () {
    const containers = {
      notification: document.getElementById("notification"),
      search: document.getElementById("search"),
      administrator: document.getElementById("administrator")
    };
  
    function closeAllContainers() {
      for (let key in containers) {
        containers[key].classList.add("hidden");
      }
    }
  
    document.getElementById("notification-icon").addEventListener("click", function (event) {
      event.stopPropagation();
      closeAllContainers();
      containers.notification.classList.toggle("hidden");
    });
  
    document.getElementById("search-icon").addEventListener("click", function (event) {
      event.stopPropagation();
      closeAllContainers();
      containers.search.classList.toggle("hidden");
    });
  
    document.getElementById("footer-logo").addEventListener("click", function (event) {
      event.stopPropagation();
      closeAllContainers();
      containers.administrator.classList.toggle("hidden");
    });
  
    document.addEventListener("click", function (event) {
      if (!event.target.closest("#notification") && !event.target.closest("#search") && !event.target.closest("#administrator")) {
        closeAllContainers();
      }
    });
  })

//// end notification , search

//// start right click menus 


const appDiv = document.getElementById("desktopapps");
appDiv.addEventListener("click", (event) => {
  event.stopPropagation();
  const checkbox = appDiv.querySelector('input[type="checkbox"]');
  if (checkbox) {
    checkbox.checked = !checkbox.checked;
  }
});

// Add a click event listener directly to the checkbox as well
const checkbox = appDiv.querySelector('input[type="checkbox"]');
if (checkbox) {
  checkbox.addEventListener("click", (event) => {
    // Prevent the click from also triggering the parent appDiv's event
    event.stopPropagation();
  });
}
//Right Click Functionality
document.addEventListener("DOMContentLoaded", function () {
  const appContextMenu = document.getElementById("app-contextmenu");
  const dashboardContextMenu = document.getElementById("context-menu");
  const dashboard = document.querySelector(".dashboard");
  const appDivs = document.querySelectorAll(".maindesktopapp .app");
  const arrowIcons = document.querySelectorAll(".maindesktopapp .app-tools i");

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


   // Show submenu on hover
   document.querySelectorAll(".context-menu li").forEach((item) => {
    item.addEventListener("mouseenter", function () {
      const submenu = this.querySelector(".submenu");
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
  

  // Right-click on App Div to show App Context Menu
  
  //$('#desktopapps').on('contextmenu', '.maindesktopapp', function(event){
    let timeoutId;
    let appdiv = $('#desktopapps .maindesktopapp');
    appdiv.on("mouseenter", function() {
      timeoutId = setTimeout(function() {
        $("#desktopapps .app-properties").removeClass("invisible");
      }, 1500); // 1500 milliseconds = 1.5 seconds
    });

    appdiv.on("mouseleave", function() {
      clearTimeout(timeoutId);
      $("#desktopapps .app-properties").addClass("invisible");
    });

    appdiv.on("contextmenu", function(event) {
      event.preventDefault();
      dashboardContextMenu.addClass("hidden").hide(); 
      let selectapp = $(this).find('.openiframe');
          $('#desktopapps .maindesktopapp .selectapp').removeClass("selectedfile");
          selectapp.addClass('selectedfile')
          if (!selectapp.hasClass('showappoptions')) {
              $(".allappoptions").removeClass("hidden");
          }else{
              $(".allappoptions").addClass("hidden");
              $(".appoptions").removeClass("hidden");
          }
      positionAndShowMenu(appContextMenu, event);
    });

 // });
     // Left-click on Arrow Icon to show App Context Menu
     $('#desktopapps').on('click', '.maindesktopapp .app-tools i', function(event){
        event.stopPropagation();         
        dashboardContextMenu.classList.add("hidden"); // Ensure dashboard menu is hidden
        dashboardContextMenu.style.display = "none";
        let selectapp = $(this).find('.openiframe');
          $('#desktopapps .maindesktopapp .selectapp').removeClass("selectedfile");
          selectapp.addClass('selectedfile')
          if (!selectapp.hasClass('showappoptions')) {
              $(".allappoptions").removeClass("hidden");
          }else{
              $(".allappoptions").addClass("hidden");
              $(".appoptions").removeClass("hidden");
          }
        positionAndShowMenu(appContextMenu, event);
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

    // Prevent the context menu from closing when clicking inside the context menu
    [appContextMenu, dashboardContextMenu].forEach((menu) => {
      menu.addEventListener("click", (event) => {
        event.stopPropagation();
      });
    });

});

//// end right click menus
