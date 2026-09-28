import { Link, usePage } from '@inertiajs/react'
import Shell from '@/Components/Shell'

interface HomeProps {
  assets: {
    logo: string
    banner: string
    banner2: string
  }
  [key: string]: any
}

export default function Home() {
  const { assets } = usePage<HomeProps>().props

  return (
    <Shell>
      <section className="space-y-10 lg:space-y-16">
        {/* Main Hero Banner */}
        <div className="relative overflow-hidden rounded-3xl shadow-2xl ring-1 ring-green/10 group">
          <img
            src={assets.banner}
            alt="Sanjumanju lifestyle hero banner showcasing premium handcrafted pickles"
            className="w-full max-h-[360px] sm:max-h-[460px] lg:max-h-[560px] object-cover group-hover:scale-[1.01] transition-transform duration-700"
            sizes="(max-width: 412px) 100vw, (max-width: 1024px) 92vw, 1200px"
            loading="eager"
            decoding="async"
          />
          <div className="absolute inset-0 bg-gradient-to-t from-green/80 via-green/20 to-transparent flex items-end p-6 sm:p-10">
            <div className="text-ivory space-y-2 max-w-2xl">
              <span className="inline-block px-3 py-1 bg-turmeric text-green font-semibold text-xs tracking-wider uppercase rounded-full shadow-sm">
                Authentic Family Craft
              </span>
              <h2 className="font-serif text-2xl sm:text-4xl font-bold leading-tight">
                Slow-matured in Ceramic Jars &amp; Cold-Pressed Mustard Oil
              </h2>
            </div>
          </div>
        </div>

        {/* Brand Narrative Intro */}
        <div className="text-center max-w-4xl mx-auto space-y-6">
          <h1 className="font-serif text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-green leading-tight">
            Welcome to Sanjumanju
          </h1>
          <p className="text-base sm:text-lg lg:text-xl text-green/80 leading-relaxed font-sans">
            Handcrafted in small batches using recipes passed down through three generations of the
            Maheshwari family. Our pickles capture the authentic flavours of South Indian home
            kitchens — slow-matured, all-natural, and made with seasonal produce.
          </p>
          <p className="text-base sm:text-lg text-green/70 leading-relaxed">
            From our signature Aam Ka Achar to traditional Lahsun Mirchi blends, every jar is a
            direct expression of tradition, patience, and heritage.
          </p>

          <div className="flex flex-col sm:flex-row items-center justify-center gap-4 pt-4">
            <Link
              href="/pickles"
              className="w-full sm:w-auto px-8 py-3.5 bg-green text-ivory font-semibold rounded-2xl hover:bg-green/90 transition-all shadow-md hover:shadow-lg text-center"
            >
              Explore Our Pickles
            </Link>
            <Link
              href="/our-story"
              className="w-full sm:w-auto px-8 py-3.5 bg-turmeric/15 text-green border border-turmeric/30 font-semibold rounded-2xl hover:bg-turmeric/25 transition-all text-center"
            >
              Our Story
            </Link>
          </div>
        </div>

        {/* Secondary Featured Banner */}
        <div className="overflow-hidden rounded-2xl shadow-lg ring-1 ring-green/5">
          <img
            src={assets.banner2}
            alt="Sanjumanju featured family pickle assortment banner"
            className="w-full max-h-[220px] sm:max-h-[280px] lg:max-h-[320px] object-cover"
            sizes="(max-width: 412px) 100vw, 960px"
            loading="lazy"
            decoding="async"
          />
        </div>

        {/* 3 Pillar Cards */}
        <div className="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
          {[
            {
              title: 'Authentic Recipes',
              text: 'Time-tested family formulas — no shortcuts, no artificial preservatives, and no synthetic colours.',
            },
            {
              title: 'Handcrafted Quality',
              text: 'Sun-matured in ceramic jars. Every jar hand-stirred and hand-packed the traditional way.',
            },
            {
              title: 'Family Heritage',
              text: 'Founded by Sanju and Manju Maheshwari. Three generations of pickle craft in every bite.',
            },
          ].map((card, i) => (
            <article
              key={card.title}
              className="bg-white/70 backdrop-blur rounded-2xl p-6 sm:p-8 shadow-md hover:shadow-xl border border-turmeric/20 transition-all group hover:-translate-y-1 duration-200"
            >
              <div className="w-12 h-12 rounded-2xl bg-turmeric/20 flex items-center justify-center mb-5 group-hover:bg-turmeric group-hover:text-ivory transition-colors">
                <span className="text-turmeric group-hover:text-ivory text-xl font-serif font-bold">{i + 1}</span>
              </div>
              <h3 className="font-serif text-xl font-bold text-green mb-3">{card.title}</h3>
              <p className="text-green/75 leading-relaxed text-sm sm:text-base">{card.text}</p>
            </article>
          ))}
        </div>
      </section>
    </Shell>
  )
}

