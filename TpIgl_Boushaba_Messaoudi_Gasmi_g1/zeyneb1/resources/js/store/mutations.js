let mutations = {
    CREATE_ETUDIANT(state, etudiant) {
        state.posts.unshift(etudiant)
    },
    FETCH_ETUDIANTS(state, etudiants) {
        return state.etudiants = etudiants
    },
    DELETE_ETUDIANT(state, etudiant) {
        let index = state.etudiants.findIndex(item => item.id === etudiant.id)
        state.etudiants.splice(index, 1)
    }
}
export default mutations