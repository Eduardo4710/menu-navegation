var url = "assets/modelo/modelo.php"
let MainVue = new  Vue (
    {
        el:"#main",
        data:
        {
        titulo:"",
        link:"",
        datas:[]

        },
        methods:
        {
            SaveLink()
            {

               if(this.titulo !="" && this.link !="")
               {
                axios.post(url, {option:1, js_titulo:this.titulo,js_link:this.link }).then(response =>{
                  // this.listarMoviles();
                  this.listaDatas();
              });
               this.titulo = "",
               this.link = ""
               }
               else
               {
                 alert("NO dejar caja vacias")
               }

            },
            listaDatas()
            {
                
                axios.post(url, {option:2}).then(response =>{
                  this.datas=response.data
                });
              
               
            },
            DeliteLink(id)
            {
                // alert(id)
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                  }).then((result) => {
                      
                    if (result.isConfirmed) {
                        this.removeLink(id)
                      Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                      )
                    }
                  })
            },
            removeLink(clave)
            {
                axios.post(url, {option:3,key:clave}).then(response =>{
                    this.listaDatas(); 
                  });
            },
            MyRuta(ruta)
            {
              window.open(ruta.link);
          
            }

        },
        created:function(){            
            this.listaDatas();            
         },    
     }
    
)