let actions = {
    createEtudiant({commit}, etudiant) {
        axios.post('/api/etudiants', etudiant)
            .then(res => {
                commit('CREATE_ETUDIANT', res.data)
            }).catch(err => {
            console.log(err)
        })
    },
    fetchEtudiants({commit}) {
        axios.get('/api/etudiants')
            .then(res => {
                commit('FETCH_ETUDIANTS', res.data)
            }).catch(err => {
            console.log(err)
        })
    },
    deleteEtudiant({commit}, etudiant) {
        axios.delete(`/api/etudiants/${etudiant.id}`)
            .then(res => {
                if (res.data === 'ok')
                    commit('DELETE_ETUDIANT', etudiant)
            }).catch(err => {
            console.log(err)
        })
    }
}
export default actions