<template>

    <div>
        <h4 class="text-center font-weight-bold">Etudiants</h4>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Matricule</th>
                <th scope="col">Niveau</th>
                <th scope="col">Groupe</th>
                <th scope="col">Supprimer</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="etudiant in etudiants">
                <td>{{etudiant.Nom}}</td>
                <td>{{etudiant.Prenom}}</td>
                <td>{{etudiant.Matricule}}</td>
                <td>{{etudiant.Niveau}}</td>
                <td>{{etudiant.Groupe}}</td>
                <td>
                    <button class="btn btn-primary bloo" @click="deleteEtudiant(etudiant)">Supprimer</button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

</template>

<script>
    import {mapGetters} from 'vuex'

    export default {
        name: "Etudiants",
        mounted() {
            this.$store.dispatch('fetchEtudiants')
        },
        methods: {
            deleteEtudiant(etudiant) {
                this.$store.dispatch('deleteEtudiant',etudiant)
            }
        },
        computed: {
            ...mapGetters([
                'etudiants'
            ])
        }
    }
</script>

<style scoped>

</style>