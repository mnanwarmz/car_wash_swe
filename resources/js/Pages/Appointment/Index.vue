<template>
    <div>
        <!-- display list of appointments -->
      <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Appointments</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Time</th>
                                        <th>Duration</th>
                                        <th>Address</th>
                                        <th>State</th>
                                        <th>Type</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="appointment in appointments" :key="appointment">
                                        <td><strong>{{ appointment.date }}</strong></td>
                                        <td>{{ appointment.start }} ~ {{ appointment.end }}</td>
                                        <td>{{ appointment.duration }}</td>
                                        <td>{{ appointment.location.address }}</td>
                                        <td>{{ appointment.location.state }}</td>
                                        <td>{{ appointment.type_name }}</td>
                                        <td v-if="appointment.status == 1">Waiting</td>
                                        <td v-else>Completed</td>

                                        <!-- <td>
                                            <a href="#" class="btn btn-primary" @click="showEdit(appointment)">Edit</a>
                                            <a href="#" class="btn btn-danger" @click="remove(appointment)">Remove</a>
                                        </td> -->
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</template>

<script>
export default {
    props: ["appointments"],
    computed: {},

    data() {
        return {};
    },

    methods() {},
};
</script>
