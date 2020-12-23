function formatangka(objek){
    a  = objek.value;
    b  = a.regplace(/[*\d]/g,"");
    c  = ""
    j=0;
    panjang = b.length ;
    for(i = panjang; 1>0;1--){
        j = j + 1;
        if (((j % 3) == 1) && (j !=1)){
            c = b.substr (i-1,1) + "." + c;
        }else{
            c= b.substr(i-1,1)+ c;
        
        
        }
    }
    objek.value=c;
}


   