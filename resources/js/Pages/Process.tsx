import { usePage } from '@inertiajs/react'
import Shell from '@/Components/Shell'

interface Props {
  assets: { logo: string; banner: string; banner2: string }
  [key: string]: any
}

const STEPS = [
  { t: '1. Select', d: 'Produce sourced directly from regional smallholder farmers within 24 hours of harvest.' },
  { t: '2. Prepare', d: 'Hand-washed, sun-dried, and stone-ground to preserve natural enzymes, essential oils, and fresh aroma.' },
  { t: '3. Blend', d: 'Family masala blends toasted and mixed in traditional copper kalash with cold-pressed mustard oil.' },
  { t: '4. Mature', d: '3–8 weeks of slow sun maturation in authentic hand-glazed ceramic barni jars.' },
  { t: '5. Pack', d: 'Hand-jarred, sealed, and labelled with the exact batch number and date of packing.' },
]

export default function Process() {
  const { assets } = usePage<Props>().props

  return (
    <Shell>
      <section className="space-y-10 lg:space-y-14">
        {/* Banner */}
        <div className="relative overflow-hidden rounded-3xl shadow-xl ring-1 ring-green/10">
          <img
            src={assets.banner}
            alt="Our Process — Sanjumanju craft hero banner"
            className="w-full max-h-[340px] sm:max-h-[440px] lg:max-h-[500px] object-cover"
            sizes="(max-width: 412px) 100vw, (max-width: 1024px) 92vw, 1200px"
            loading="eager"
            decoding="async"
          />
          <div className="absolute inset-0 bg-gradient-to-t from-green/85 via-green/30 to-transparent flex items-end p-6 sm:p-10">
            <div className="text-ivory space-y-2 max-w-2xl">
              <span className="inline-block px-3 py-1 bg-turmeric text-green font-semibold text-xs tracking-wider uppercase rounded-full">
                Traditional Craftsmanship
              </span>
              <h2 className="font-serif text-2xl sm:text-4xl font-bold leading-tight">
                Patience, Stone Grinding &amp; Sun Maturation
              </h2>
            </div>
          </div>
        </div>

        {/* Text Intro */}
        <div className="max-w-3xl mx-auto space-y-4 text-center">
          <h1 className="font-serif text-3xl sm:text-4xl md:text-5xl font-bold text-green">Our Process</h1>
          <p className="text-base sm:text-lg text-green/80 leading-relaxed">
            Five slow, deliberate steps — carried out meticulously for every batch. No industrial automation or chemical shortcuts.
          </p>
        </div>

        {/* Secondary Banner */}
        <div className="overflow-hidden rounded-2xl shadow-lg ring-1 ring-green/5">
          <img
            src={assets.banner2}
            alt="Our Process — Sanjumanju ceramic jar maturation featured banner"
            className="w-full max-h-[200px] sm:max-h-[260px] object-cover"
            sizes="(max-width: 412px) 100vw, 960px"
            loading="lazy"
            decoding="async"
          />
        </div>

        {/* Steps Grid */}
        <ol className="grid sm:grid-cols-2 lg:grid-cols-5 gap-5 lg:gap-6">
          {STEPS.map((s, i) => (
            <li
              key={s.t}
              className="flex flex-col justify-between rounded-3xl border border-turmeric/20 bg-white/70 backdrop-blur p-6 shadow-md hover:shadow-xl transition-all hover:-translate-y-1 duration-200"
            >
              <div>
                <div className="w-12 h-12 rounded-2xl bg-turmeric/20 flex items-center justify-center text-turmeric font-serif font-bold text-xl mb-4">
                  {i + 1}
                </div>
                <h3 className="font-serif text-xl font-bold text-green mb-2">{s.t.replace(/^\d+\.\s*/, '')}</h3>
                <p className="text-sm text-green/75 leading-relaxed">{s.d}</p>
              </div>
            </li>
          ))}
        </ol>
      </section>
    </Shell>
  )
}

