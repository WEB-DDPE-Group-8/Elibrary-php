var arr= [[11,"Atomic Habits: Tiny Changes, Remarkable Results","James Clear","Self-Help","English",2018,"./resources/books/1.jpg",12.99],
          [12,"Mindset: Changing The Way You think To Fulfill Your Potential","Carol S. Dweck", , ,2017,"./resources/books/2.jpg",15.99],
          [13,"Ego is the Enemy: The Fight to Master Our Greatest Opponent","Ryan Holiday","Business & Economics",,2016,"./resources/books/3.jpg",18.00],
          [15,"Rich Dad Poor Dad: What the Rich Teach Their Kids About Money That the Poor and Middle Class Do Not!","Robert T. Kiyosaki",,,2016,"./resources/books/5.jpg",13.50],
          [14,"The Psychology of Money","Morgan Housel","Business & Economics",,2020,"./resources/books/4.jpg",45.52],
          [16,"Finish What You Start: The Art of Following Through, Taking Action, Executing, & Self-Discipline","Peter Hollins","Business & Economics",,2018,"./resources/books/6.jpg",46.12],
          [17,"The Alchemist : A Fable About Following Your Dream","Coelho, Paulo","Fiction",,1999,"./resources/books/7.jpg",45.78],
          [18,"The 7 Habits of Highly Effective People: Powerful Lessons in Personal Change","Stephen R. Covey","Business & Economics",,2020,"./resources/books/8.jpg",58.68],
          [19,"Introduction To HTML & CSS Learn To Code Websites Like A Pro","Ajini Danny","Computers - Web Development",,2020,"./resources/books/9.jpg",45.24],
          [110,"CSS Visual Dictionary","Greg Sidelnikov","Computers - Web Development",,2018,"./resources/books/10.jpg",35.53],
          [111,"Sams Teach Yourself HTML, CSS & JavaScript Web Publishing in One Hour a Day","Laura Lemay, Rafe Colburn, Jennifer Kyrnin","Computers - Programming",,2016,"./resources/books/11.jpg",25.14],
          [112,"The Definitive Guide to HTML5","Adam Freeman","Computers - Programming",,2011,"./resources/books/112.jpg",36.23],
          [113,"HTML and CSS: Design and Build Websites","Jon Duckett","Computers - Web Development",,2011,"./resources/books/13.jpg",12.12],
          [114,"Admas",,,,,"./resources/books/admas.jfif",12.12],
          [115,"Albert Einstien",,,"English",,"./resources/books/albert einstein.jpg",12.12],
          [116,"Anne Frank",,,"Amharic",,"./resources/books/anne frank.jpg",25.25],
          [117,"Bussiness Adventure",,,"Amharic",,"./resources/books/bussiness adventure.jpg",32.12],
          [118,"Dertogada",,,"Amharic",,"./resources/books/dertogada.jfif",12.12],
          [119,"Designing",,,"English",,"./resources/books/designing.jpg",12.12],
          [120,"Medical",,,"English",,"./resources/books/medical.jpg",38.42],
          [121,"Designing",,,"English",,"./resources/books/designing.jpg",32.36],
          [122,"oromay.jfif",,,"English",,"./resources/books/oromay.jfif",25.36],
          [123,"The secret of life",,,"English",,"./resources/books/the secret of life.jpg",45.18],
          [124,"Fikir-Eske-Mekaber",,,"English",,"./resources/books/fiker-eske.jfif",23.25]
        ]
    
function find()
{
  search = document.getElementById("search-box")
  frm =  document.getElementById("frm")
  // btn =  document.getElementById("label")
  console.log(search.value)
  
  for(i in arr){
     console.log(arr[i][1])
     if(arr[i][1] == search.value)
     {
      // console.log(arr[i][0])
      console.log("Is a match")
  //     setlookout(arr[i][0])
  // frm.action="description.html" 
  break;
  }
  else{
    console.log("not a match")
  }
}
}
