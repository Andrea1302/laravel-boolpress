<template>
     <div id="view" >
                    <ul v-for="post,i in posts" :key="i">
                        
                            <li :class="colori[checkUserColor()]">
                               <div id="nomeUser">
                                   {{post.autore}}
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
                colori : [
                    "bg-primary",
                    "bg-secondary",
                    "bg-success",
                    "bg-danger",
                    "bg-warning",
                    "bg-info",
                    "bg-light",
                    // "bg-dark",
                    "bg-body",
                    "bg-white",

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

            }
        },
        created() {
            axios.get('/posts/list')
            .then(res => {
                this.posts = res.data;
            }).catch(err=>{
                console.error(err);
            })
        
        },
    }
</script>