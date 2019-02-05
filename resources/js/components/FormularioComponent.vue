<template>
<form name="meu_form">

                        <h1>Entre em contato</h1>

                        <p class="nome">
                            <input type="text" id="nomeid" placeholder="Tiago Vale" required="required" name="nome" />
                            <label for="nome">Nome</label>
                        </p>
                        <p class="fone">
                            <input type="text" id="foneid" placeholder="(xx)xx-xx-xx-xx" name="fone" />
                            <label for="fone">Fone</label>

                        </p>
                        <p>
                            <input type="email" id="emailid" placeholder="fulano@mail.com" name="email" />
                            <label for="email">Email</label>
                        </p>
                        <p>
                            <textarea placeholder="Deixe sua opnião"></textarea>
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
