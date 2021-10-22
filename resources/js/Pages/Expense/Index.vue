<!-- This example requires Tailwind CSS v2.0+ -->
<template>
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div
                class="
                    py-2
                    align-middle
                    inline-block
                    min-w-full
                    sm:px-6
                    lg:px-8
                "
            >
                <div
                    class="
                        shadow
                        overflow-hidden
                        border-b border-gray-200
                        sm:rounded-lg
                    "
                >
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th
                                    scope="col"
                                    class="
                                        px-6
                                        py-3
                                        text-left text-xs
                                        font-medium
                                        text-gray-500
                                        uppercase
                                        tracking-wider
                                    "
                                >
                                    Name
                                </th>
                                <th
                                    scope="col"
                                    class="
                                        px-6
                                        py-3
                                        text-left text-xs
                                        font-medium
                                        text-gray-500
                                        uppercase
                                        tracking-wider
                                    "
                                >
                                    Description
                                </th>
                                <th
                                    scope="col"
                                    class="
                                        px-6
                                        py-3
                                        text-left text-xs
                                        font-medium
                                        text-gray-500
                                        uppercase
                                        tracking-wider
                                    "
                                >
                                    Amount
                                </th>
                                <th
                                    scope="col"
                                    class="
                                        px-6
                                        py-3
                                        text-left text-xs
                                        font-medium
                                        text-gray-500
                                        uppercase
                                        tracking-wider
                                    "
                                >
                                    Date
                                </th>
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr
                                v-for="(expense, expenseIdx) in expenses"
                                :key="expense.id"
                                :class="
                                    expenseIdx % 2 === 0
                                        ? 'bg-white'
                                        : 'bg-gray-50'
                                "
                            >
                                <td
                                    class="
                                        px-6
                                        py-4
                                        whitespace-nowrap
                                        text-sm
                                        font-medium
                                        text-gray-900
                                    "
                                >
                                    {{ expense.name }}
                                </td>
                                <td
                                    class="
                                        px-6
                                        py-4
                                        whitespace-nowrap
                                        text-sm text-gray-500
                                    "
                                >
                                    {{ expense.description }}
                                </td>
                                <td
                                    class="
                                        px-6
                                        py-4
                                        whitespace-nowrap
                                        text-sm text-gray-500
                                    "
                                >
                                    {{ expense.amount }}
                                </td>
                                <td
                                    class="
                                        px-6
                                        py-4
                                        whitespace-nowrap
                                        text-sm text-gray-500
                                    "
                                >
                                    17-10-1998
                                </td>
                                <td
                                    class="
                                        px-6
                                        py-4
                                        whitespace-nowrap
                                        text-right text-sm
                                        font-medium
                                    "
                                >
                                    <a
                                        href="#"
                                        class="
                                            text-indigo-600
                                            hover:text-indigo-900
                                        "
                                        >edit</a
                                    >
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import AppLayoutVue from "../../Layouts/AppLayout.vue";
const people = [
    {
        name: "Jane Cooper",
        title: "Regional Paradigm Technician",
        role: "Admin",
        email: "jane.cooper@example.com",
    },
    {
        name: "Cody Fisher",
        title: "Product Directives Officer",
        role: "Owner",
        email: "cody.fisher@example.com",
    },
    // More people...
];

export default {
    layout: AppLayoutVue,
    props: ["expenses"],
    setup() {
        return {
            people,
        };
    },
};
</script>

