var app = new Vue({
   el: '#controller_products',
   data: {
      load_products: true,
      products: [],
      cart:[]
   },
   methods: {
      loadProducts: function(){
         this.$http.get('get_products').then(function(respuesta){            
            this.products = respuesta.body;            
         }, function(){
            alert('No se han podido recuperar los productos.');
         });
      },
      addCart(item) {
         /* var busqueda = _.find(this.cart, ['idproducts',item.idproducts])
         console.log(busqueda);
            //si está
         if(typeof busqueda == 'object'){
            //si está en el carrito dame el indice en la posición del array
            var index = _.indexOf(this.cart, busqueda) 
            //console.log(index)
            if(index>=0){               
               this.cart[index].cantidad++
            }
            else{
               item.cantidad=1*/
               this.cart.push(item)
            /*}
         }
         else{
            item.cantidad=1
            this.cart.push(item)
         }*/
      },
      delCart(item) {
        
         
         var busqueda = _.find(this.cart, ['idproducts',item.idproducts])
         
            //si está
         if(typeof busqueda == 'object'){
              //si está en el carrito dame el indice en la posición del array
               var index = _.indexOf(this.cart, busqueda)  
            /* console.log(this.cart[index].cantidad);
               if(this.cart[index].cantidad==1){  */             
                  this.cart.splice(index,1)
               /*}
               else{                  
                  //this.cart[index].cantidad=this.cart[index].cantidad-1
                  busqueda.cantidad--
                  this.cart[index]=busqueda
               }
               console.log(this.cart);
               */
            
         }
      }   
   },
   created: function(){
      this.loadProducts();     
   }
});