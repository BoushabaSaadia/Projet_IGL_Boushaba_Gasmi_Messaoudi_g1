<template>

    <form action="" @submit="createEtudiant(etudiant)">
        <h4 class="text-center font-weight-bold">Ajouter un étudiant</h4>
        <div class="form-group">
            <input type="text" placeholder="Nom" v-model="etudiant.Nom" class="form-control graay">

        </div>
        <div class="form-group">
            <input type="text" placeholder="Prénom" v-model="etudiant.Prenom" class="form-control graay">

        </div>
        <div class="form-group">
            <input type="text" placeholder="Matricule" v-model="etudiant.Matricule" class="form-control graay">

        </div>
        <div class="form-group">
            <input type="text" placeholder="Niveau" v-model="etudiant.Niveau" class="form-control graay">

        </div>
        <div class="form-group">
            <input type="text" placeholder="Groupe" v-model="etudiant.Groupe" class="form-control graay">

        </div>
        <div class="form-group">
            <strong><button :disabled="!isValid" class="btn btn-block bloo" @click.prevent="createEtudiant(etudiant)">Submit
            </button></strong>
        </div>
    </form>
</template>

<script>
    export default {
        name: "createEtudiant",
        data() {
            return {
                etudiant: {
                    Nom: '',
                    Prenom: '',
                    Matricule:'',
                    Niveau:'',
                    Groupe:''

                }
            }
        },
        mounted() {

        },
        methods: {
            createEtudiant(etudiant) {
                this.$store.dispatch('createEtudiant', etudiant)
            }
        },
        computed: {
            isValid() {
                return this.etudiant.Nom !== '' && this.etudiant.Prenom !== ''&& this.etudiant.Matricule !== ''&& this.etudiant.Niveau !== ''&& this.etudiant.Groupe !== ''
            }
        }
    }
</script>

<style scoped>

</style>