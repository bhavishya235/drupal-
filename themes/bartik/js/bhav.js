function OnResizeDocument() {
          // console.log("The size of the window or the document has changed.");
                var elem1=document.getElementById ("photoframes");
                var elem2=document.getElementById ("headchange");
                var elem3=document.getElementById ("footchange");
                var elem22=document.getElementById ("headbutton");
                var elem12=document.getElementById ("midimage");
                var elem32=document.getElementById ("midsofa");
                var bhav1=document.getElementById ("bhav1");
                var bhav2=document.getElementById ("bhav2");
                var bhav3=document.getElementById ("bhav3");
                var bhav4=document.getElementById ("bhav4");
                var bhav5=document.getElementById ("bhav5");
                var bhav6=document.getElementById ("bhav6");
                var tablet1=document.getElementById ("tablet1");
                var tablet2=document.getElementById ("tablet2");
                var tablet3=document.getElementById ("tablet3");
                var tablet4=document.getElementById ("tablet4");
                var tablet5=document.getElementById ("tablet5");
                var tablet6=document.getElementById ("tablet6");
                
                if (typeof(document.body.clientWidth) == 'number') {
                    width = document.body.clientWidth;
                    console.log(width);
                    tablet1.style.display="block";tablet3.style.display="block";tablet3.style.display="block";
                    tablet4.style.display="block";tablet5.style.display="block";tablet6.style.display="block";
                    elem22.className="span4";
                    elem12.className="span4";
                    elem32.className="span4";
                                
                    if(width > 830)
                    {
                        if(elem2)
                        {
                            
                            bhav1.style.display="block";bhav2.style.display="block";bhav3.style.display="block";
                            bhav4.style.display="block";bhav5.style.display="block";bhav6.style.display="block";
                            elem1.className="span8";
                            elem2.className="span8";
                            elem3.className="span8";
                        }
                    }
                    else
                    {
                            bhav1.style.display="none";bhav2.style.display="none";bhav3.style.display="none";
                            bhav4.style.display="none";bhav5.style.display="none";bhav6.style.display="none";
                            elem1.className="span10 offset1";
                            elem2.className="span10 offset1";
                            elem3.className="span10 offset1";
                            if(width < 450)
                            {
                                tablet1.style.display="none";tablet2.style.display="none";tablet3.style.display="none";
                                tablet4.style.display="none";tablet5.style.display="none";tablet6.style.display="none";
                                elem22.className="span10 offset1";
                                elem12.className="span10 offset1";
                                elem32.className="span10 offset1";
                            }
                        
                    }
                }
            }
