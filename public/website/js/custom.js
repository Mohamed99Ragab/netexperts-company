/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */




  function toggleDropDownAbout() {

    
    document.getElementById('myDropdown').classList.toggle('show');


    
  }


  
  // Close the dropdown menu if the user clicks outside of it
  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }

   // Function to scroll to the top of a specific section
   function scrollToTopOfSection(sectionID) {
    let section = document.getElementById(sectionID);
    let offset = section.offsetTop - 100;

    if (section) {
      
      
        window.scrollTo({
          top: offset,
          left: 100,
          behavior: 'smooth'
      });

   
     
    }

   }


 



  // modifi scroll 

  // todo
  function activateTab(tabId) {
    const tabElement = document.getElementById(tabId);
    
    // Remove "active" class from all tab links and tab contents
    const allTabLinks = document.querySelectorAll('.tab-link');
    const allTabContents = document.querySelectorAll('.tab-pane');
    allTabLinks.forEach(link => link.classList.remove('active'));
    allTabContents.forEach(content => content.classList.remove('active'));
    
    // Add "active" class to the clicked tab link and tab content
    if (tabElement) {
      tabElement.classList.add('active');
      tabElement.classList.add('fade');
      tabElement.classList.add('show');


      tabElement.scrollIntoView(false);
     }
  }