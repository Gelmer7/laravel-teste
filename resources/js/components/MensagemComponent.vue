<template>
<form name="meu_form">

                        <h1>Deixe seu mensagem</h1>

                        <p class="nome">
                            <input type="text" id="nomeid" placeholder="Pepe botellas" required="required" name="nome" />
                            <label for="nome">Nome</label>
                        </p>
                     
                        <p>
                            <textarea placeholder="Escreva uma mensagem"></textarea>
                        </p>
                        <p class="submit">
                            <input type="submit" onclick="Enviar();" value="Enviar" />
                        </p>

                    </form>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
