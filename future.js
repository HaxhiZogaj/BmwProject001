var firstIndex = 0; 
// Deklarimi i variables firstIndex dhe inicializimi i saj me vlerën 0. 
function automaticSlide(){
    // Deklarimi i një funksioni automaticSlide që do të përdoret për të ndërruar imazhet automatikisht.
    setTimeout(automaticSlide, 2500);
    // Thirrja e funksionit setTimeout për të ekzekutuar funksionin automaticSlide 
    // përsëri pas një intervali prej 2500 milisekondash (2.5 sekonda).
    var pics; 
    // ndermjetsues qe perdoret ne ciklin for.

    const img=document.querySelectorAll('img');
    // Marrja e të gjithë elementëve img në dokument dhe ruajtja e tyre në një variabël të quajtur img. 
    // Kjo përdor metodën querySelectorAll për të selektuar të gjithë elementët img.

    for(pics=0; pics<img.length; pics++){
        // Fillimi i një cikli for që kalon nëpër të gjithë elementët e gjetur img. (0-total).
        img[pics].style.display="none";
        // Vendosja e stilit display të çdo imazhi në "none", që fsheh të gjithë imazhet.
    }
    firstIndex++;
    // Rritja e vlerës së firstIndex me 1 për të kaluar te imazhi tjetër që do të shfaqet.
    if(firstIndex > img.length){
        // Kontrolli nëse firstIndex është më i madh se numri i imazheve. 
        // Nëse po, do të thotë se është arritur fundi i listës. 
        firstIndex = 1; // Rikthimi ne 1 per te filluar nga fillimi.
    }
    img[firstIndex -1].style.display="block";
    // Shfaqja e imazhit aktual duke vendosur stilit display të këtij imazhi në "block". 
    // firstIndex - 1 përdoret sepse indekset e array-t fillon nga 0, ndërsa firstIndex fillon nga 1.
}
automaticSlide();