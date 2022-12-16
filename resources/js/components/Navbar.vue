<template>
    <div class="navbar">
        <v-row>
            <v-col class="col col-sm-12">
                <v-img
                    :src="this.imageUrl"
                    width="45"
                    alt="Backpacker logo"
                    contain
                />
            </v-col>
        </v-row>
    </div>
</template>

<script>
import logo from './backpacker_logo.png'


export default {
    created() {
        this.imageUrl = new URL('./backpacker_logo.png', import.meta.url).href
    },
    mounted() {
        console.log('Navbar mounted.')
    }
}
</script>
