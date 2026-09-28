import { Link, usePage } from '@inertiajs/react'
import Shell from '@/Components/Shell'

interface Props {
  assets: { logo: string; banner: string; banner2: string }
  slug?: string | null
  [key: string]: any
}

const LEGAL_DOCS: Array<{ slug: string; title: string }> = [
  { slug: 'privacy', title: 'Privacy Policy' },
  { slug: 'terms', title: 'Terms of Service' },
  { slug: 'shipping-policy', title: 'Shipping Policy' },
  { slug: 'return-policy', title: 'Return & Cancellation' },
  { slug: 'disclaimer', title: 'Disclaimer' },
]

export default function Legal({ slug }: { slug?: string | null }) {
  const { assets } = usePage<Props>().props

  const activeSlug = slug || 'privacy'
  const activeDoc = LEGAL_DOCS.find((d) => d.slug === activeSlug) || LEGAL_DOCS[0]

  return (
    <Shell>
      <section className="space-y-10 lg:space-y-14">
        {/* Banner */}
        <div className="relative overflow-hidden rounded-3xl shadow-xl ring-1 ring-green/10">
          <img
            src={assets.banner}
            alt={`Legal — Sanjumanju ${activeDoc.title} hero banner`}
            className="w-full max-h-[320px] sm:max-h-[400px] lg:max-h-[460px] object-cover"
            sizes="(max-width: 412px) 100vw, (max-width: 1024px) 92vw, 1200px"
            loading="eager"
            decoding="async"
          />
          <div className="absolute inset-0 bg-gradient-to-t from-green/85 via-green/30 to-transparent flex items-end p-6 sm:p-10">
            <div className="text-ivory space-y-2 max-w-2xl">
              <span className="inline-block px-3 py-1 bg-turmeric text-green font-semibold text-xs tracking-wider uppercase rounded-full">
                Compliance &amp; Trust
              </span>
              <h2 className="font-serif text-2xl sm:text-4xl font-bold leading-tight">
                {activeDoc.title}
              </h2>
            </div>
          </div>
        </div>

        {/* Tab Navigation */}
        <div className="flex flex-wrap justify-center gap-2 max-w-4xl mx-auto border-b border-turmeric/20 pb-4">
          {LEGAL_DOCS.map((doc) => {
            const isTabActive = doc.slug === activeSlug
            return (
              <Link
                key={doc.slug}
                href={`/legal/${doc.slug}`}
                className={`px-4 py-2 rounded-2xl text-xs sm:text-sm font-semibold transition-all ${
                  isTabActive
                    ? 'bg-green text-ivory shadow-sm'
                    : 'bg-white/60 text-green/80 hover:bg-turmeric/15 hover:text-green'
                }`}
              >
                {doc.title}
              </Link>
            )
          })}
        </div>

        <div className="max-w-3xl mx-auto space-y-2 text-center">
          <p className="text-xs text-green/60 uppercase tracking-widest font-semibold">Sanjumanju Policies</p>
          <h1 className="font-serif text-3xl sm:text-4xl font-bold text-green">{activeDoc.title}</h1>
          <p className="text-xs sm:text-sm text-green/70">
            Last updated: {new Date().toLocaleDateString('en-IN', { year: 'numeric', month: 'long', day: 'numeric' })}
          </p>
        </div>

        {/* Legal Article Content */}
        <article className="prose prose-green max-w-3xl mx-auto text-green/85 leading-relaxed space-y-6 bg-white/75 backdrop-blur rounded-3xl p-6 sm:p-10 border border-turmeric/20 shadow-lg text-sm sm:text-base">
          <h2 className="font-serif text-2xl font-bold text-green border-b border-turmeric/15 pb-2">Overview</h2>
          <p>
            The policies outlined on this page govern your access to and use of the Sanjumanju website, products, and services.
            By placing an order or communicating via our Contact forms, you agree to these standard terms.
          </p>

          <h2 className="font-serif text-2xl font-bold text-green border-b border-turmeric/15 pb-2">Product Quality &amp; Storage</h2>
          <p>
            Because Sanjumanju pickles are 100% natural and free of chemical preservatives, they are sun-matured in cold-pressed mustard oil.
            Always use a clean, dry spoon to scoop out pickle and ensure top oil coverage is maintained to protect freshness.
          </p>

          <h2 className="font-serif text-2xl font-bold text-green border-b border-turmeric/15 pb-2">Intellectual Property</h2>
          <p>
            All brand graphics, product artwork, recipes, copy, and logo marks displayed on this website are protected intellectual property
            belonging to Sanjumanju. Unauthorized reproduction or commercial hotlinking is strictly prohibited.
          </p>

          <h2 className="font-serif text-2xl font-bold text-green border-b border-turmeric/15 pb-2">Need Assistance?</h2>
          <p>
            If you have questions about orders, returns, or policy clarifications, please get in touch with our team via the{' '}
            <Link href="/contact" className="text-chilli font-semibold underline underline-offset-2 hover:text-chilli/80">
              Contact Page
            </Link>.
          </p>
        </article>
      </section>
    </Shell>
  )
}

