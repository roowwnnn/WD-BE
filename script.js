var projectpics = [
    "project-def.png"
];


for (var i = 0; i < projectpics.length; i++){
    var projectContainer = document.getElementById('projectContainer');
    projectContainer.innerHTML += `
       <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 p-5">
            <a href="project${i+1}/index.html"><div class="container p-0" style="max-width: 400px; background-color: white; border-radius: 20px; text-align: center; position: relative; display: flex; justify-content: center; align-items: end">
                <div class="textContainer mb-2"style="background-color: #660708; width: 115px; border-radius: 20px; position:absolute; color: white;">
                    <p><b>Project ${i+1}</b></p>
                </div>
                <img src="imgs/${projectpics[i]}" class="img-fluid">
            </div></a>
       </div>
    `
}
