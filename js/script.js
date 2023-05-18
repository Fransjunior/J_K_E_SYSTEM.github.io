const imageWrapper = document.querySelector(".images");

// Ruta relativa a la carpeta de imágenes
const imagePath = "../images/";

// Lista de nombres de archivo de imágenes
const imageList = [
    "img-1.jpg",
    "img-2.jpg",
    "img-3.jpg",
    "img-4.jpg",
    "img-5.jpg",
    "img-6.jpg",
    "img-7.jpg",
    "img-8.jpg",
    "img-9.jpg",
    "img-10.jpg"
    // Agrega aquí los nombres de archivo de las imágenes que quieras mostrar
];

// Recorremos la lista de nombres de archivo de imágenes
for (const imageName of imageList) {
    const img = document.createElement("img");
    img.src = `${imagePath}${imageName}`;

    const downloadButton = document.createElement("a");
    downloadButton.href = `${imagePath}${imageName}`;
    downloadButton.download = imageName;
    downloadButton.innerHTML = '<ion-icon name="download" title="descargar" class="download-icon"></ion-icon>';

    const imageContainer = document.createElement("div");
    imageContainer.classList.add("image-container");
    imageContainer.appendChild(img);
    imageContainer.appendChild(downloadButton);

    const li = document.createElement("li");
    li.appendChild(imageContainer);
    imageWrapper.appendChild(li);
}