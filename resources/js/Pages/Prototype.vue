<template>
  <div
    id="overlay"
    class="hidden fixed top-0 left-0 w-full h-screen bg-black bg-opacity-70 z-10"
  ></div>

  <!-- BOARD GAMES -->
  <section class="list">
    <header>
      <h3 class="p-1 font-bold leading-none text-gray-900">BOARD GAMES</h3>
    </header>

    <ul>
      <li class="card">
        <div class="p-3">
          <p>Lost Cities</p>
        </div>
      </li>
      <li class="card">
        <div class="p-3">
          <p>Summoner Wars: Master Set</p>
        </div>
      </li>
      <li class="card">
        <div class="p-3">
          <aside class="flex mb-1.5">
            <span class="w-8 h-2 mr-2 bg-yellow-300 rounded-full"></span>
            <span class="w-8 h-2 mr-2 bg-blue-400 rounded-full"></span>
            <span class="w-8 h-2 mr-2 bg-red-400 rounded-full"></span>
            <span class="w-8 h-2 mr-2 bg-green-300 rounded-full"></span>
            <span class="w-8 h-2 mr-2 bg-purple-400 rounded-full"></span>
          </aside>

          <p>Star Realms</p>
        </div>
      </li>
      <li class="card">
        <div class="p-3">
          <p>Agricola: All Creatures Big and Small</p>
        </div>
      </li>
      <li class="card">
        <div class="p-3">
          <p>Splendor</p>
        </div>
      </li>
      <li class="card">
        <div class="p-3">
          <aside class="flex mb-1.5">
            <span class="w-8 h-2 mr-2 rounded-full bg-yellow-300"></span>
          </aside>

          <p>unPerfect Heroes: Battle Lines</p>
        </div>
      </li>
      <li class="card">
        <div class="p-3">
          <p>Decrypto</p>
        </div>
      </li>
      <li class="card">
        <div class="p-3">
          <p>Wits &amp; Wagers</p>
        </div>
      </li>
    </ul>

    <footer>
      <a class="block p-1 text-gray-500 hover:text-gray-700" href="#">
        Add a card...
      </a>
    </footer>
  </section>

  <!-- TOKYO -->
  <section class="list">
    <header>
      <h3 class="leading-none font-bold text-gray-900 p-1">TOKYO</h3>
    </header>

    <ul class="">
      <li class="card">
        <figure
          class="flex items-center max-h-52 sm:max-h-36 border-b border-gray-200 overflow-hidden rounded-t"
        >
          <img src="img/godzilla.jpg" alt="godzilla statue in tokyo" />
        </figure>
        <div class="p-3">
          <aside class="flex mb-1.5">
            <span class="w-8 h-2 mr-2 bg-red-400 rounded-full"></span>
          </aside>

          <p>GODZILLA potriasť jej packou zagratuľovať k povýšeniu</p>
        </div>
      </li>
      <li class="card">
        <div class="p-3">
          <aside class="flex mb-1.5">
            <span class="w-8 h-2 mr-2 bg-purple-400 rounded-full"></span>
          </aside>

          <p>VAMPIRE CAFÉ suck my blood pls</p>
        </div>
      </li>
      <li class="card">
        <figure
          class="flex items-center max-h-52 sm:max-h-36 border-b border-gray-200 overflow-hidden rounded-t"
        >
          <img src="img/hachiboy.png" alt="drawing of a dog, akita breed" />
        </figure>
        <div class="p-3">
          <aside class="flex mb-1.5">
            <span class="w-8 h-2 mr-2 bg-green-300 rounded-full"></span>
          </aside>

          <p>HACHIKO pohladkať tohoto veľmi dobrého chlapca</p>

          <footer class="flex mt-2 text-xs text-white">
            <a
              class="px-1 py-0.5 mr-1.5 bg-gray-500 opacity-50 hover:opacity-100 rounded"
              href="#"
              >very</a
            >
            <a
              class="px-1 py-0.5 mr-1.5 bg-gray-500 opacity-50 hover:opacity-100 rounded"
              href="#"
              >good</a
            >
            <a
              class="px-1 py-0.5 mr-1.5 bg-gray-500 opacity-50 hover:opacity-100 rounded"
              href="#"
              >boy</a
            >
          </footer>
        </div>
      </li>
    </ul>

    <footer>
      <a class="hidden p-1 text-gray-500 hover:text-gray-700" href="#">
        Add a card...
      </a>

      <form action="/">
        <textarea
          class="w-full p-3 border-t border-l border-gray-300 outline-none rounded shadow-inner"
          rows="3"
        ></textarea>

        <div class="flex mt-1.5 items-center">
          <button class="btn btn-green">Add card</button>

          <a class="ml-0.5 p-1 text-gray-500 hover:text-gray-700" href="#">
            <svg class="w-6 h-6 fill-current" viewBox="0 0 20 20">
              <path
                d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z"
              ></path>
            </svg>
          </a>
        </div>
      </form>
    </footer>
  </section>

  <!-- BRAIN THOUGHTS -->
  <section class="list">
    <header>
      <h3
        contenteditable=""
        class="p-1 font-bold leading-none text-gray-900 outline-none focus:shadow-outline"
      >
        BRAIN THOUGHTS
      </h3>
    </header>

    <ul>
      <li class="card">
        <div class="p-3">
          <p>zvykol som byť mladší.</p>
        </div>
      </li>
      <li class="card">
        <div class="p-3">
          <p contenteditable="" class="outline-none focus:shadow-outline">
            nemám rád cestovanie. možno je to tým, že ma otec mlátil glóbusom.
          </p>
        </div>
      </li>
      <li class="card relative z-20">
        <div class="p-3">
          <aside class="flex mb-1.5">
            <span class="w-8 h-2 mr-2 bg-purple-300 rounded-full"></span>
            <span class="w-8 h-2 mr-2 bg-red-400 rounded-full"></span>
          </aside>

          <p>
            čo keby fitness ľudia prestali cvičiť a všetka krv sa im z bicepsov
            naleje do hlavy a každý z nich je hawking.
          </p>
        </div>

        <!-- POP UP -->
        <ul
          class="w-40 ml-2 text-sm text-white font-semibold sm:absolute top-0 left-80 sm:m-0"
          id="popup"
        >
          <li class="flex">
            <a
              class="flex items-center px-3 py-2.5 mb-1.5 bg-black bg-opacity-60 hover:bg-opacity-100 rounded transform hover:translate-x-1 transition duration-75 ease-in"
              href="#"
            >
              <svg class="w-4 h-4 mr-1.5" viewBox="0 0 20 20">
                <path
                  class="fill-current"
                  d="M17.534,10.458l-3.587-6.917c-0.088-0.168-0.262-0.275-0.452-0.275H6.571c-0.189,0-0.363,0.107-0.452,0.275L2.775,9.989c-0.081,0.134-0.159,0.261-0.211,0.409l-0.031,0.06c-0.027,0.05-0.006,0.104-0.014,0.157c-0.044,0.178-0.109,0.348-0.109,0.537v3.293c0,1.262,1.028,2.289,2.29,2.289h10.603c1.262,0,2.288-1.027,2.288-2.289v-3.293c0-0.097-0.043-0.178-0.055-0.271C17.594,10.747,17.607,10.597,17.534,10.458z M6.88,4.284h6.306l2.405,4.639c-0.1-0.013-0.188-0.059-0.289-0.059h-2.354c-0.27,0-0.491,0.208-0.508,0.477c-0.082,1.292-1.154,2.305-2.441,2.305c-1.287,0-2.359-1.013-2.44-2.305C7.542,9.073,7.32,8.865,7.052,8.865H4.7c-0.077,0-0.142,0.037-0.217,0.043L6.88,4.284zM16.573,14.445c0,0.7-0.57,1.271-1.271,1.271H4.7c-0.701,0-1.271-0.571-1.271-1.271v-3.293c0-0.122,0.038-0.231,0.07-0.343l0.235-0.455C3.966,10.073,4.306,9.882,4.7,9.882h1.907c0.324,1.595,1.732,2.782,3.394,2.782c1.66,0,3.07-1.188,3.394-2.782h1.909c0.7,0,1.271,0.57,1.271,1.271V14.445z"
                ></path>
              </svg>

              Edit labels
            </a>
          </li>
          <li class="flex">
            <a
              class="flex items-center px-3 py-2.5 mb-1.5 bg-black bg-opacity-60 hover:bg-opacity-100 rounded transform hover:translate-x-1 transition duration-75 ease-in"
              href="#"
            >
              <svg class="w-4 h-4 mr-1.5" viewBox="0 0 20 20">
                <path
                  class="fill-current"
                  d="M9.634,10.633c0.116,0.113,0.265,0.168,0.414,0.168c0.153,0,0.308-0.06,0.422-0.177l4.015-4.111c0.229-0.235,0.225-0.608-0.009-0.836c-0.232-0.229-0.606-0.222-0.836,0.009l-3.604,3.689L6.35,5.772C6.115,5.543,5.744,5.55,5.514,5.781C5.285,6.015,5.29,6.39,5.522,6.617L9.634,10.633z"
                ></path>
                <path
                  class="fill-current"
                  d="M17.737,9.815c-0.327,0-0.592,0.265-0.592,0.591v2.903H2.855v-2.903c0-0.327-0.264-0.591-0.591-0.591c-0.327,0-0.591,0.265-0.591,0.591V13.9c0,0.328,0.264,0.592,0.591,0.592h15.473c0.327,0,0.591-0.264,0.591-0.592v-3.494C18.328,10.08,18.064,9.815,17.737,9.815z"
                ></path>
              </svg>

              Edit tags
            </a>
          </li>
          <li class="flex">
            <a
              class="flex items-center px-3 py-2.5 mb-1.5 bg-black bg-opacity-60 hover:bg-opacity-100 rounded transform hover:translate-x-1 transition duration-75 ease-in"
              href="#"
            >
              <svg class="w-4 h-4 mr-1.5" viewBox="0 0 20 20">
                <path
                  class="fill-current"
                  d="M16.471,5.962c-0.365-0.066-0.709,0.176-0.774,0.538l-1.843,10.217H6.096L4.255,6.5c-0.066-0.362-0.42-0.603-0.775-0.538C3.117,6.027,2.876,6.375,2.942,6.737l1.94,10.765c0.058,0.318,0.334,0.549,0.657,0.549h8.872c0.323,0,0.6-0.23,0.656-0.549l1.941-10.765C17.074,6.375,16.833,6.027,16.471,5.962z"
                ></path>
                <path
                  class="fill-current"
                  d="M16.594,3.804H3.406c-0.369,0-0.667,0.298-0.667,0.667s0.299,0.667,0.667,0.667h13.188c0.369,0,0.667-0.298,0.667-0.667S16.963,3.804,16.594,3.804z"
                ></path>
                <path
                  class="fill-current"
                  d="M9.25,3.284h1.501c0.368,0,0.667-0.298,0.667-0.667c0-0.369-0.299-0.667-0.667-0.667H9.25c-0.369,0-0.667,0.298-0.667,0.667C8.583,2.985,8.882,3.284,9.25,3.284z"
                ></path>
              </svg>

              Archive</a
            >
          </li>
        </ul>
      </li>
      <li class="card">
        <div class="p-3">
          <p>ak ježiš chcel, aby sme boli triezvi, robil by z vína vodu.</p>

          <footer class="flex mt-2 text-xs text-white">
            <a
              class="px-1 py-0.5 mr-1.5 bg-gray-500 rounded opacity-50 hover:opacity-100"
              href="#"
              >✝</a
            >
            <a
              class="px-1 py-0.5 mr-1.5 bg-gray-500 rounded opacity-50 hover:opacity-100"
              href="#"
              >🍷</a
            >
          </footer>
        </div>
      </li>
      <li class="card">
        <div class="p-3">
          <p>
            každý dom môže byť strašidelný dom. stačí vypnúť wifi. život je ako
            škatuľka čokolády. nemám rád čokoládu.
          </p>
        </div>
      </li>
      <li class="card">
        <div class="p-3">
          <p>najhorší spôsob ako začať deň, je zobudiť sa.</p>
        </div>
      </li>
    </ul>

    <footer>
      <a class="hidden p-1 text-gray-500 hover:text-gray-700" href="#">
        Add a card...
      </a>
    </footer>
  </section>

  <!-- ADD NEW LIST -->
  <form
    class="flex-shrink-0 sm:w-80 sm:mx-4 sm:mb-0 sm:pr-8 text-gray-800"
    action="/"
  >
    <input
      class="w-full p-2.5 bg-white bg-opacity-40 focus:bg-opacity-100 placeholder-white focus:placeholder-gray-600 font-bold rounded-lg outline-none focus:shadow-xl"
      type="text"
      placeholder="Add another list"
    />
  </form>
</template>

<script>
import { Link } from "@inertiajs/vue3";
export default {
  components: {
    Link,
  },
};
</script>

<style>
</style>