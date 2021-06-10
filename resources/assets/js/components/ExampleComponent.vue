    <template>
    <div class="container">
        <div class="row">
            <list-transactions></list-transactions>
           <list-individual-transations></list-individual-transations>
          <list-sacco-transactions></list-sacco-transactions>
        </div>
    </div>
</template>

<script>
import ListTransactions from './ListTransactions'
import ListIndividualTransations from './ListIndividualTransations'
import ListSaccoTransactions from './ListSaccoTransactions'

    export default {
        mounted() {
            console.log('Component mounted.')
        },
        components: {
                ListTransactions,
                ListIndividualTransations,
                ListSaccoTransactions
        },
    }
</script>
