import * as API from "Api/documents"

const state = {
  documents: [],
}

const getters = {
  documents: state => state.documents,
}

const actions = {
  async getDocuments({ commit, getters }, payload = {}) {
    // let { page = getters.currentPageNews, perPage } = payload
    const { data } = await API.getDocuments()
    commit("setDocuments", data)
  },
}

const mutations = {
  setDocuments(state, documents) {
    state.documents = documents
    // state.countNews = count
  },
}

export default {
  state,
  getters,
  actions,
  mutations
}
