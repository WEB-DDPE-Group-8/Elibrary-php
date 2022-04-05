
var inp = document.getElementById("upld");

inp.addEventListener("click", function () {




  var bknm = document.getElementById("bookname");
  var author = document.getElementById("author");
  var catag = document.getElementById("genre");
  var linguist = document.getElementById("lang");
  var descr = document.getElementById("Desc").value;
  var waga = document.getElementById("price");
  waga = parseInt(waga.value)
  
  var date = document.getElementById("date").value;

  console.log(bknm.value);
  // console.log(author)
  // console.log()
  // console.log(addbook)
  // console.log(addbook)
  newkeys= []
  newkey = JSON.parse(localStorage.getItem("bookcounter"));
  newkeys = JSON.parse(localStorage.getItem("arrcounter"))
  newkey+=1
  console.log(newkey)
 
  let addbook = new book(descindx = newkey ,title = bknm.value,auth = author.value,
    cat = catag.value,
    lang = linguist.value,
    year = date,
    impath="",
    price=waga,
    desc = descr)
  ;
  console.log(addbook)
  console.log(descr)

 
  newkeys.push(newkey)
  localStorage.setItem("arrcounter",JSON.stringify(newkeys))
  localStorage.setItem("bookcounter",newkey)
  localStorage.setItem(JSON.stringify(newkey+"pending"),JSON.stringify(addbook))
});