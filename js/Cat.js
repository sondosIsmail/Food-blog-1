var h = document.createElement('h2');
var p =document.createElement('p')

function myFunction(imgs) {
    var expandImg = document.getElementById("expandedImg");
    var imgText = document.getElementById("imgtext");
    h.textContent = " Delicious"
    p.textContent= "Super cozy, super creamy, super potato soup!Whenever people say liquid diet I think to myself: I could do that! I mean, there are so many awesome soups out there and soup is a liquid. The best part of doing a liquid soup diet would be this potato soup: super creamy, fully loaded with all the good things and a secret ingredient. Essentially a liquid baked potato with ALL of the toppingsand a secret ingredient. Essentially a liquid baked potato with ALL of the toppings."
    imgText.appendChild(h);
    imgText.appendChild(p)
    expandImg.src = imgs.src;
    expandImg.parentElement.style.display = "block";
    h.style.color= "#fbaf32";
    h.style.padding="5px"
    p.style.padding = "10px";
    p.style.lineHeight = "1.5"

  }
