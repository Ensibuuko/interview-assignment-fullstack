<template>
  <b-card
    title="Transactions in Saccos"
    sub-title="Table showing transactions according to which saccos they belong to"
       border-variant="primary"
        class="mb-2"
  >
  <div class="overflow-auto">    
                <b-table
                id="my-table"
                striped 
                hover
                bordered
                border-variant="success"
                :items="items"
                :per-page="perPage"
                :current-page="currentPage"
                small
                ></b-table>
                <b-pagination
                v-model="currentPage"
                :total-rows="rows"
                :per-page="perPage"
                aria-controls="my-table"
                align="right"
                ></b-pagination>

                <p class="mt-3">Current Page: {{ currentPage }}</p>
           </div>
  </b-card>
</template>

<script>
import axios from 'axios'
export default {
  name: 'TableComponent',
   data() {
      return {
        perPage: 10,
        currentPage: 1,
        items: []
      }
    },
    mounted () {
        const APIURL = "http://localhost:8085";
        axios.get(`${APIURL}/api/saccos`)
        .then(response => {
            this.items = response.data
        })
        .catch(error => {
            console.log (error);
        })
    },
    computed: {
      rows() {
        return this.items.length
      }
    }
}


</script>