import { usePage } from '@inertiajs/react'
import Shell from '@/Components/Shell'

interface Props {
  assets: { logo: string; banner: string; banner2: string }
  [key: string]: any
}

const PICKLES = [
  {
    name: 'Aam Ka Achar',
    subtitle: 'Signature Mango Pickle',
    desc: 'Raw green mangoes marinated with turmeric, roasted fenugreek seeds, mustard seeds, and pure cold-pressed mustard oil.',
    ingredients: 'Green Mango, Mustard Oil, Turmeric, Fenugreek, Fennel, Salt',
    weight: '500g Jar',
    price: '₹349',
  },
  {
    name: 'Nimbu Ka Achar',
    subtitle: 'Sun-Cured Spiced Lime',
    desc: 'Juicy lemons sun-brined for 40 days with kala namak, roasted cumin, and carom seeds for a gut-friendly digestif blend.',
    ingredients: 'Lemon, Black Salt, Cumin, Ajwain, Red Chilli, Asafoetida',
    weight: '400g Jar',
    price: '₹299',
  },
  {
    name: 'Hari Mirch',
    subtitle: 'Stuffed Green Chilli',
    desc: 'Fiery green chillies hand-slit and split-stuffed with tangy dry mango powder, toasted spices, and mustard oil.',
    ingredients: 'Green Chilli, Amchur, Mustard Powder, Salt, Mustard Oil',
    weight: '350g Jar',
    price: '₹279',
  },
  {
    name: 'Lahsun Mirchi',
    subtitle: 'Garlic & Red Chilli',
    desc: 'Whole peeled garlic cloves slow-marinated with crushed spicy red chillies in authentic aromatic mustard oil.',
    ingredients: 'Garlic Cloves, Red Chilli, Mustard Oil, Lemon Juice, Spices',
    weight: '400g Jar',
    price: '₹329',
  },
  {
    name: 'Mix Achar',
    subtitle: 'Traditional Medley',
    desc: 'Seasonal harvest assortment featuring raw mango chunks, lime wedges, green chilli batons, and crunchy carrots.',
    ingredients: 'Mango, Lime, Green Chilli, Carrot, Mustard Oil, Spices',
    weight: '500g Jar',
    price: '₹319',
  },
  {
    name: 'Gajar Gobhi Shalgam',
    subtitle: 'Punjabi Winter Special',
    desc: 'Farm-fresh winter cauliflower, sweet carrots, and turnips lightly spiced with ginger, garlic, and jaggery vinegar.',
    ingredients: 'Cauliflower, Carrot, Turnip, Ginger, Jaggery, Spices',
    weight: '500g Jar',
    price: '₹349',
  },
]

export default function Pickles() {
  const { assets } = usePage<Props>().props

  return (
    <Shell>
      <section className="space-y-10 lg:space-y-14">
        {/* Hero Banner */}
        <div className="relative overflow-hidden rounded-3xl shadow-xl ring-1 ring-green/10">
          <img
            src={assets.banner}
            alt="Pickles range — Sanjumanju hero product banner"
            className="w-full max-h-[340px] sm:max-h-[440px] lg:max-h-[500px] object-cover"
            sizes="(max-width: 412px) 100vw, (max-width: 1024px) 92vw, 1200px"
            loading="eager"
            decoding="async"
          />
          <div className="absolute inset-0 bg-gradient-to-t from-green/85 via-green/30 to-transparent flex items-end p-6 sm:p-10">
            <div className="text-ivory space-y-2 max-w-2xl">
              <span className="inline-block px-3 py-1 bg-turmeric text-green font-semibold text-xs tracking-wider uppercase rounded-full">
                Small-Batch Artistry
              </span>
              <h2 className="font-serif text-2xl sm:text-4xl font-bold leading-tight">
                Authentic Heritage Recipes, Sun-Matured to Perfection
              </h2>
            </div>
          </div>
        </div>

        {/* Section Header */}
        <div className="max-w-3xl mx-auto space-y-4 text-center">
          <h1 className="font-serif text-3xl sm:text-4xl md:text-5xl font-bold text-green">Our Pickles Range</h1>
          <p className="text-base sm:text-lg text-green/80 leading-relaxed">
            Six time-honoured recipes crafted in limited runs. Hand-packed in ceramic glass jars with
            zero artificial preservatives or chemicals.
          </p>
        </div>

        {/* Secondary Assortment Banner */}
        <div className="overflow-hidden rounded-2xl shadow-lg ring-1 ring-green/5">
          <img
            src={assets.banner2}
            alt="Pickles range — Sanjumanju assortment featured banner"
            className="w-full max-h-[200px] sm:max-h-[260px] object-cover"
            sizes="(max-width: 412px) 100vw, 960px"
            loading="lazy"
            decoding="async"
          />
        </div>

        {/* Pickles Grid */}
        <div className="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
          {PICKLES.map((p) => {
            const waText = encodeURIComponent(`Hi Sanjumanju! I would like to order: ${p.name} (${p.weight} - ${p.price}). Please share payment details and delivery timeframe.`)
            return (
              <article
                key={p.name}
                className="flex flex-col justify-between rounded-3xl border border-turmeric/25 bg-white/70 backdrop-blur p-6 shadow-md hover:shadow-xl transition-all group hover:-translate-y-1 duration-200"
              >
                <div className="space-y-4">
                  <div className="flex items-start justify-between gap-2 border-b border-turmeric/15 pb-4">
                    <div>
                      <h3 className="font-serif text-2xl font-bold text-green">{p.name}</h3>
                      <p className="text-xs font-semibold uppercase tracking-wider text-turmeric mt-0.5">{p.subtitle}</p>
                    </div>
                    <div className="text-right">
                      <span className="text-xl font-bold text-green">{p.price}</span>
                      <p className="text-xs text-green/60 font-medium">{p.weight}</p>
                    </div>
                  </div>

                  <p className="text-green/80 text-sm sm:text-base leading-relaxed">{p.desc}</p>

                  <div className="rounded-xl bg-ivory/80 p-3 border border-turmeric/10 text-xs text-green/70">
                    <strong className="text-green font-semibold">Ingredients: </strong>
                    {p.ingredients}
                  </div>
                </div>

                <div className="pt-6 mt-4 border-t border-turmeric/10">
                  <a
                    href={`https://wa.me/910000000000?text=${waText}`}
                    target="_blank"
                    rel="noopener noreferrer"
                    className="w-full inline-flex items-center justify-center gap-2 rounded-xl bg-green text-ivory font-semibold py-3 px-4 hover:bg-green/90 transition-colors shadow-sm text-sm"
                  >
                    <span>Order on WhatsApp</span>
                    <svg className="w-4 h-4 fill-current" viewBox="0 0 24 24">
                      <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/>
                    </svg>
                  </a>
                </div>
              </article>
            )
          })}
        </div>
      </section>
    </Shell>
  )
}

