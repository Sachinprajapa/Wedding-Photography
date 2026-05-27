function showMessage(service) {
  alert("You selected: " + service + " photography package!");
}

// Parallax effect on scroll
window.addEventListener("scroll", function() {
  const heroImage = document.querySelector(".hero img");
  let scrollY = window.scrollY;
  heroImage.style.transform = `translateY(${scrollY * 0.3}px)`;
});


// ================= HERO BUTTON =================

function showMessage(type){
  alert(type + " Photography Available 📸");
}


// ================= GALLERY FILTER =================

const filterButtons = document.querySelectorAll(".filter-btn");

const galleryItems = document.querySelectorAll(".gallery-item");

filterButtons.forEach((button)=>{

  button.addEventListener("click", ()=>{

    // Active button remove
    filterButtons.forEach((btn)=>{
      btn.classList.remove("active");
    });

    // Active add
    button.classList.add("active");

    // Filter value
    const filterValue = button.getAttribute("data-filter");

    galleryItems.forEach((item)=>{

      if(
        filterValue === "all" ||
        item.classList.contains(filterValue)
      ){
        item.style.display = "block";
      }
      else{
        item.style.display = "none";
      }

    });

  });

});


// ================= EQUIPMENT FILTER =================

const equipmentButtons =
document.querySelectorAll(".equipment-btn");

const equipmentItems =
document.querySelectorAll(".equipment-item");


equipmentButtons.forEach((button)=>{

  button.addEventListener("click", ()=>{

    // Remove active class
    equipmentButtons.forEach((btn)=>{
      btn.classList.remove("active");
    });

    // Add active class
    button.classList.add("active");

    // Filter value
    const filterValue =
    button.getAttribute("data-filter");

    equipmentItems.forEach((item)=>{

      if(
        filterValue === "all" ||
        item.classList.contains(filterValue)
      ){
        item.style.display = "block";
      }
      else{
        item.style.display = "none";
      }

    });

  });

});