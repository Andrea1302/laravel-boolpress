<template>
     <div id="view" >
                    <ul >
                        
                            <li   v-for="post,i in posts" :key="i"   >
                             <!-- :class="verify(post.userId)? 'bg-primary' : 'bg-light'" -->
                               <div id="nomeUser">
                                   {{post.autore}} : 
                                </div>
                            
                                <div id="testopost">   
                                    {{post.testo_post}}
                                </div>

                                <div text-end id="ora">
                                    {{post.created_at}}
                                </div>
                            </li>

                    </ul>
                 
                </div>
</template>

<script>
    export default {
        data(){
            return{
                posts : [],
                // colori : [
                //     "bg-primary",
                //     "bg-secondary",
                //     "bg-success",
                //     "bg-danger",
                //     "bg-warning",
                //     "bg-info",
                //     "bg-light",
                //     // "bg-dark",
                //     "bg-body",
                //     "bg-white",

                // ],
                users : [],
                idUser : [],
                active : "",
                colore : [
                    
                ],
            }
        },
        methods :{
           
            checkUserColor(){
                    let numberRandom = Math.floor(Math.random() * 9);
            //    let primoColore =   Math.floor(Math.random() * 257);
            //    let secondoColore =   Math.floor(Math.random() * 257);
            //    let terzoColore =   Math.floor(Math.random() * 257);

            //     let colore = `${primoColore},${secondoColore},${terzoColore}`;
                    return numberRandom;
            //     return `rgb(${colore})`;

            },
            // prova(postId){
            //     console.log('postid = ' + postId + "userId = " + this.usersId) ;
            // },

            checkcolor(){
               
            },
            // verify(postId){
            //     this.users.forEach(element => {
            //         console.log(element);
            //     });
            //     // this.users.forEach(user => {
            //     //    let userId = user.id;
            //     //    console.log(userId);
            //     //      if (userId == postId){
            //     //     return true
            //     // } else {
            //     //     return false
            //     // }
            //     // });
               
            //     console.log(this.active);
            // },
        },
        created() {
            axios.get('/posts/list')
            .then(res => {
                this.posts = res.data;
            }).catch(err=>{
                console.error(err);
            });


            axios.get('/user/information/')
            .then(res => {
                let users = res.data;
                users.forEach(element => {
                    console.log(element);
                });
            }).catch(err=>{
                console.error(err);
            });

              
            
        },
       
      
    }
    
</script>